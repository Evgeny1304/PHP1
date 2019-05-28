<?php
function index()
{
    $sql = "SELECT id, user_id, date, comment, order_items 
            FROM orders ORDER BY id DESC";
    $res = mysqli_query(connect(), $sql);
    $content = '';
    while ($row = mysqli_fetch_assoc($res)) {
        if ($row['user_id'] === $_SESSION['userId']) {
            $order_items = json_decode($row['order_items'], true);
            $content .= "<hr>{$row['date']}";
            foreach ($order_items as $id => $cartItem) {
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
        }
    }

    return $content;

}

function add()
{
    $msg = 'Что-то пошло не так...';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $comment = clearStr($_POST['comment']);
        $order_items = json_encode($_SESSION['cart'][$_SESSION['userId']], JSON_UNESCAPED_UNICODE);
        $userId = $_SESSION['userId'];
        $sql = "INSERT INTO orders(user_id, comment, order_items) 
                VALUES ('{$userId}', '{$comment}', '{$order_items}')";
        mysqli_query(connect(), $sql);
        unset($_SESSION['cart'][$_SESSION['userId']]);
        $msg = 'Ваш заказ принят. Его номер:' . mysqli_insert_id(connect());
    }

    $_SESSION['msg'] = $msg;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}