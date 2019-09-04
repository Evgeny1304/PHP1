<?php
function index()
{
    $sql = "SELECT id, user_id, date, comment, order_items 
            FROM orders ORDER BY id DESC";
    $res = mysqli_query(connect(), $sql);
    $content = '';
    while ($row = mysqli_fetch_assoc($res)) {
        if ($_SESSION['login'] === 'admin') {
            $orderPrice = 0;
            $order_items = json_decode($row['order_items'], true);
            $content .= "<hr>{$row['date']}";
            $content .= "<h2>Уникальный номер пользователя: {$row['user_id']}</h2>";
            foreach ($order_items as $id => $cartItem) {
                $orderPrice += ($cartItem['price'] * $cartItem['quantity']);
                $totalPrice = $cartItem['price'] * $cartItem['quantity'];
                $content .= <<<php
            <div class="item">
                <img src="{$cartItem['url']}" alt="{$cartItem['name']}" width="200" height="150">
                <h3 class="item__title">{$cartItem['name']}</h3>
                <p class="item__price">Цена за 1 товара: {$cartItem['price']}</p>
                <p class="item__quantity">Количество: {$cartItem['quantity']}</p>
                <p class="item__price">Итоговая цена: {$totalPrice}</p>
            </div>
php;
            }
            $content .= "<p>Общая сумма заказа: {$orderPrice}</p>";
        } elseif ($row['user_id'] === $_SESSION['userId']) {
            $orderPrice = 0;
            $order_items = json_decode($row['order_items'], true);
            $content .= "<hr>{$row['date']}";
            foreach ($order_items as $id => $cartItem) {
                $orderPrice += ($cartItem['price'] * $cartItem['quantity']);
                $totalPrice = $cartItem['price'] * $cartItem['quantity'];
                $content .= <<<php
            <div class="item">
                <img src="{$cartItem['url']}" alt="{$cartItem['name']}" width="200" height="150">
                <h3 class="item__title">{$cartItem['name']}</h3>
                <p class="item__price">Цена за 1 товара: {$cartItem['price']}</p>
                <p class="item__quantity">Количество: {$cartItem['quantity']}</p>
                <p class="item__price">Итоговая цена: {$totalPrice}</p>
            </div>
php;
            }
            $content .= "<p>Общая сумма заказа: {$orderPrice}</p>";
        }
    }

    return $content;

}

function add()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $comment = clearStr($_POST['comment']);
        $order_items = json_encode($_SESSION['cart'][$_SESSION['userId']], JSON_UNESCAPED_UNICODE);
        $userId = $_SESSION['userId'];
        if ($_SESSION['userId'] === 'Not registered user') {
            $msg = 'Вы не можете оформить заказ. Пожалуйста, зарегистрируйтесь или войдите в личный кабинет.';
        } else {
            $sql = "INSERT INTO orders(user_id, comment, order_items) 
                VALUES ('{$userId}', '{$comment}', '{$order_items}')";
            mysqli_query(connect(), $sql);
            unset($_SESSION['cart'][$_SESSION['userId']]);
            $msg = 'Ваш заказ принят. Его номер:' . mysqli_insert_id(connect());
        }
    }

    $_SESSION['msg'] = $msg;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}