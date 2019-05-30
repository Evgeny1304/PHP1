<?php
function index()
{
    $sql = "SELECT id, fio, login, password, date, count FROM users";
    $res = mysqli_query(connect(), $sql);

    $content = '<h1>Пользователи</h1>';
    while ($row = mysqli_fetch_assoc($res)) {
        $content .= <<<php
    <h3>Уникальный номер пользователя: {$row['id']}</h3>
    <p>Логин пользователя: {$row['login']}</p>
    <p>Имя пользователя: {$row['fio']}</p>
    <hr>
php;
    }
    return $content;
}