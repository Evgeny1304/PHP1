<?php
function index(){
    $content = <<<php
<h1>Калькулятор. Задание 1</h1>
<form method="post" action="?page=calc1&func=calculate">
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

    return $content;
}

function calculate(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation){
            case '+':
                $result = +$num1 + +$num2;
                break;
            case '-':
                $result = +$num1 - +$num2;
                break;
            case '*':
                $result = +$num1 * +$num2;
                break;
            case '/':
                if (+$num2 === 0){
                    $result = 'Делить на 0 нельзя';
                } else {
                    $result = +$num1 / +$num2;
                }
                break;
        }
        $_SESSION['msg'] = 'Результат выполнения операции ' . $operation . ' между числами ' . $num1 . ' и ' . $num2 . ' равен ' . $result;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}