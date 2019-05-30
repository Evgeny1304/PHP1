<?php
function index()
{
    $id = (int)$_GET['id'];
    $sql = "SELECT id, url, name, price 
    FROM gallery WHERE id = " . $id;
    $content = '<h1>Товар</h1>';

    $res = mysqli_query(connect(), $sql);
    $row = mysqli_fetch_assoc($res);
    $content .= <<<php
    <div class="product">
        <img src="{$row['url']}" alt="{$row['name']}">
        <h3 class="product__name">{$row['name']}</h3>
        <p class="product__price">{$row['price']}</p>
    </div>
php;
    return $content;
}