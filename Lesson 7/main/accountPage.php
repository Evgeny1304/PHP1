<?php
function index (){
    $content = '<h1>Личный кабинет</h1>';
    $content .= <<<php
    <div class="account">
        <h3>Добро пожаловать</h3>
        <p class="account__name">Ваше имя: {$_SESSION['fio']}</p>
        <p class="account__login">Ваш логин: {$_SESSION['login']}</p>
        <a href="?page=account&func=logout">Exit</a>
    </div>
php;
    return $content;
}


function logout()
{
    session_destroy();
    header('Location: ?page=auth');
    exit;
}
