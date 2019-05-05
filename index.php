<?php
//Задание 1
$a = rand(-10, 10);
$b = rand(-10, 10);
echo 'Переменная a=' . $a . '</br>';
echo 'Переменная b=' . $b . '</br>';

if ($a >= 0 && $b >= 0) {
    echo 'Оба числа положительные, разность равна ' . ($a - $b) . '</br>';
} elseif ($a < 0 && $b < 0) {
    echo 'Оба числа отрицательные, произведение равно ' . ($a * $b) . '</br>';
} else {
    echo 'Числа имеют разные знаки, сумма равна ' . ($a + $b) . '</br>';
}

//Задание 2
$c = rand(0, 15);
$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
echo 'Переменная c=' . $c . '</br>';

switch ($c) {
    case 0:
        print_r($arr);
        break;
    case 1:
        print_r(array_slice($arr, 1));
        break;
    case 2:
        print_r(array_slice($arr, 2));
        break;
    case 3:
        print_r(array_slice($arr, 3));
        break;
    case 4:
        print_r(array_slice($arr, 4));
        break;
    case 5:
        print_r(array_slice($arr, 5));
        break;
    case 6:
        print_r(array_slice($arr, 6));
        break;
    case 7:
        print_r(array_slice($arr, 7));
        break;
    case 8:
        print_r(array_slice($arr, 8));
        break;
    case 9:
        print_r(array_slice($arr, 9));
        break;
    case 10:
        print_r(array_slice($arr, 10));
        break;
    case 11:
        print_r(array_slice($arr, 11));
        break;
    case 12:
        print_r(array_slice($arr, 12));
        break;
    case 13:
        print_r(array_slice($arr, 13));
        break;
    case 14:
        print_r(array_slice($arr, 14));
        break;
    case 15:
        echo 15;
        break;
}

//Задание 3
function add($arg1, $arg2)
{
    return ($arg1 + $arg2);
}

function subtract($arg1, $arg2)
{
    return ($arg1 - $arg2);
}

function multiply($arg1, $arg2)
{
    return ($arg1 * $arg2);
}

function division($arg1, $arg2)
{
    if ($arg2 === 0) {
        return 'Делить на 0 нельзя';
    } else {
        return ($arg1 / $arg2);
    }
}

echo 'Сумма чисел равна ' . add($a, $b) . '</br>';
echo 'Разность чисел равна ' . subtract($a, $b) . '</br>';
echo 'Произведение чисел равно ' . multiply($a, $b) . '</br>';
echo 'Деление чисел равно ' . division($a, $b) . '</br>';

//Задание 4
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return ($arg1 + $arg2);
            break;
        case '-':
            return ($arg1 - $arg2);
            break;
        case '*':
            return ($arg1 * $arg2);
            break;
        case '/':
            return ($arg1 / $arg2);
            break;
    }
}

echo 'Сумма чисел равна ' . mathOperation($a, $b, '+') . '</br>';
echo 'Разность чисел равна ' . mathOperation($a, $b, '-') . '</br>';
echo 'Произведение чисел равно ' . mathOperation($a, $b, '*') . '</br>';
echo 'Деление чисел равно ' . mathOperation($a, $b, '/') . '</br>';

//Задание 6
function power($val, $pow)
{
    if ($pow === 1) {
        return $val;
    } elseif ($pow === 0) {
        return 1;
    } else {
        return ($val * power($val, $pow - 1));
    }
}

echo 'Степень равна ' . power(2, 4) . '<br/>';

//Задание 7
$hour = date('H');
$minute = date('i');

//Так как функция date() возвращает строку, то в функциях происходит манипуляция со строками.

function currentHour($h)
{
    if (+$h >= 11 && +$h <= 14) {
        return $h . ' часов ';
    } elseif (+$h === 1 || +$h[1] === 1) {
        return $h . ' час ';
    } elseif ((+$h >= 2 && +$h <= 4) || (+$h[1] >= 2 && +$h[1] <= 4)) {
        return $h . ' часа ';
    } else {
        return $h . ' часов ';
    }
}

function currentMinute($m)
{
    if (+$m >= 11 && +$m <= 14) {
        return $m . ' минут';
    } elseif (+$m === 1 || +$m[1] === 1) {
        return $m . ' минута';
    } elseif ((+$m >= 2 && +$m <= 4) || (+$m[1] >= 2 && +$m[1] <= 4)) {
        return $m . ' минуты';
    } else {
        return $m . ' минут';
    }
}

echo currentHour($hour);
echo currentMinute($minute);
