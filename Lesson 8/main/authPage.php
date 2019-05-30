<?php
function index()
{

    if ($_SESSION['adminKey'] != ADMIN_KEY) {
        $content = <<<php
    <h1>Форма авторизации</h1>
    <form method="post" action="?page=auth&func=login">
        <input name="login" placeholder="login">
        <input name="password" placeholder="password">
        <input type="submit" value="Login" >
    </form>

php;
    } elseif ($_SESSION['login'] !== 'admin') {
        $content = <<<php
        <h1>Личный кабинет</h1>
    <div class="account">
        <h3>Добро пожаловать</h3>
        <p class="account__name">Ваше имя: {$_SESSION['fio']}</p>
        <p class="account__login">Ваш логин: {$_SESSION['login']}</p>
        <a href="?page=orders">Посмотреть заказы</a>
        <a href="?page=auth&func=logout">Выйти</a>
    </div>
php;
    } else {
        $content = <<<php
        <h1>Личный кабинет Администратора</h1>
    <div class="account">
        <h3>Добро пожаловать</h3>
        <p class="account__login">Ваш логин: {$_SESSION['login']}</p>
        <a href="?page=orders">Посмотреть заказы пользователей</a>
        <a href="?page=users">Посмотреть зарегистрированных пользователей</a>
        <a href="?page=auth&func=logout">Выйти</a>
    </div>
php;
    }

    return $content;
}

function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = clearStr($_POST['login']);
        $sql = "SELECT id, fio, password 
                FROM users 
                WHERE login = '$login'";
        $res = mysqli_query(connect(), $sql);
        $row = mysqli_fetch_assoc($res);

        $password = md5($_POST['password'] . SOL);
        $_SESSION['msg'] = 'Не верный логин или пароль';
        if (!empty($login) && $password == $row['password']) {
            $_SESSION['adminKey'] = ADMIN_KEY;
            $_SESSION['login'] = $login;
            $_SESSION['fio'] = $row['fio'];
            $_SESSION['userId'] = $row['id'];
            $_SESSION['msg'] = 'Вы авторизованы';
        }
        if (!empty($_SESSION['cart']['Not registered user'])) {
            $_SESSION['cart'][$row['id']] = $_SESSION['cart']['Not registered user'];
            unset($_SESSION['cart']['Not registered user']);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}

function logout()
{
    $_SESSION['adminKey'] = USER_EXIT;
    $_SESSION['login'] = 'Not registered user';
    $_SESSION['fio'] = 'Not registered user';
    $_SESSION['userId'] = 'Not registered user';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
