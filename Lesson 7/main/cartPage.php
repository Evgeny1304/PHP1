<?php
function index (){
    $content = '<h1>Корзина</h1>';
    $cart = $_SESSION['cart'];
    if (!empty($cart)){
        foreach ($cart as $key => $cartItem) {
            $totalPrice = $cartItem['price']*$cartItem['quantity'];
            $cartItems .= <<<php
            <div class="item">
                <img src="{$cartItem['url']}" alt="{$cartItem['name']}" width="200" height="150">
                <h3 class="item__title">{$cartItem['name']}</h3>
                <p class="item__price">Цена за 1 товара: {$cartItem['price']}</p>
                <p class="item__quantity">Количество: {$cartItem['quantity']}</p>
                <p class="item__price">Итоговая цена: {$totalPrice}</p>
                <a href="?page=cart&id={$cartItem['id']}&func=plus">+</a>
                <a href="?page=cart&id={$cartItem['id']}&func=minus">-</a>
                <a href="?page=cart&id={$cartItem['id']}&func=delete">Удалить из корзины</a>
            </div>
php;
        }
    }
    $content .= <<<php
    <div class="cart" style="width: 700px; display: flex; flex-wrap: wrap">$cartItems</div>
php;

    return $content;
}

function plus(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = (int)$_GET['id'];
        $_SESSION['cart'][$id]['quantity']++;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}

function minus(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = (int)$_GET['id'];
        if ($_SESSION['cart'][$id]['quantity'] === 1){
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id]['quantity']--;
        }

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}

function delete(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = (int)$_GET['id'];
        unset($_SESSION['cart'][$id]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}
