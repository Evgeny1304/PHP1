<?php
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

echo '<h1>' . 'Результат выполнения операции ' . $operation . ' между числами ' . $num1 . ' и ' . $num2 . ' равен ' . $result . '</h1>';
