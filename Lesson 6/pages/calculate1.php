<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: ?page=6');
    exit();
}


$content =<<<php
<h1>Калькулятор. Задание 1</h1>
<form method="post" action="/pages/result.php">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="Рассчитать">
</form>

php;
