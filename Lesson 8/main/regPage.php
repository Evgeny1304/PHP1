<?php
function index()
{
    $content = '<h1>Форма Регистрации</h1>';
    $content .= <<<php
  
    <form method="post" action="?page=reg&func=signUp">
        <input name="login" placeholder="login">
        <input name="fio" placeholder="fio">
        <input name="password" placeholder="password">
        <input type="submit" value="Sign Up" >
    </form>

php;

    return $content;
}

function signUp()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = clearStr($_POST['login']);
        $fio = clearStr($_POST['fio']);
        $password = md5($_POST['password'] . SOL);
        mysqli_query(connect(), "INSERT INTO users(fio,login,password) VALUES ('{$fio}','{$login}','{$password}')");
        $_SESSION['loginReg'] = $login;
        $_SESSION['msg'] = 'Вы зарегистрировались ' . $_SESSION['loginReg'];
        $sql = "SELECT id, fio, password 
                FROM users 
                WHERE login = '$login'";
        $res = mysqli_query(connect(), $sql);
        $row = mysqli_fetch_assoc($res);
        if (!empty($_SESSION['cart']['Not registered user'])) {
            $_SESSION['cart'][$row['id']] = $_SESSION['cart']['Not registered user'];
            unset($_SESSION['cart']['Not registered user']);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}
