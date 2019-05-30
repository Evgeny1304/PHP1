<?php
function index()
{
    $sql = "SELECT id, url, name, price FROM gallery";
    $res = mysqli_query(connect(), $sql);

    $content = '<h1>Каталог товаров</h1>';
    while ($row = mysqli_fetch_assoc($res)) {
        $item .= <<<php
        <div class="product">
              <img src="{$row['url']}" alt="{$row['name']}" width="200" height="150">
              <h3 class="product__title">{$row['name']}</h3>
              <p class="product__price">{$row['price']}</p>
              <a href="?page=product&id={$row['id']}">Подробнее</a>
              <a href="?page=catalog&id={$row['id']}&func=addCart">Добавить в корзину</a>
        </div>
php;
    }
    $content .= <<<php
    <div class="products" style="width: 700px; display: flex; flex-wrap: wrap">$item</div>
php;

    return $content;
}

function addCart(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = (int)$_GET['id'];
        $sql = "SELECT id, url, name, price 
                FROM gallery 
                WHERE id = '$id'";
        $res = mysqli_query(connect(), $sql);
        $row = mysqli_fetch_assoc($res);
        if (!empty($_SESSION['cart'][$row['id']])){
            $_SESSION['cart'][$row['id']]['quantity']++;
        } else {
            $_SESSION['cart'][$row['id']] = $row;
            $_SESSION['cart'][$row['id']]['quantity'] = 1;
        }

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}