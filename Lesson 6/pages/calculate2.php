<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: ?page=7');
    exit();
}


$content =<<<php
<h1>Калькулятор. Задание 2</h1>
<form method="post" action="/pages/result.php">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
</form>

php;
