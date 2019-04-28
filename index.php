<?php
$title = 'Домашнее задание 1 PHP1';
$headline = 'Моё первое ДЗ на PHP';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<div class="task_4">
    <h1><?= $headline ?></h1>
    <h2><?= date('Y'); ?> год</h2>
</div>
<div class="task_2">
    <?php
    $a = 'Hello,';
    $b = 'world';
    $c = $a . $b;
    echo $c . '<br>';
    ?>
    <?php
    $a = 4;
    $b = 5;
    echo $a + $b . '<br>';    // сложение
    echo $a * $b . '<br>';    // умножение
    echo $a - $b . '<br>';    // вычитание
    echo $a / $b . '<br>';  // деление
    echo $a % $b . '<br>'; // остаток от деления
    echo $a ** $b . '<br>'; // возведение в степень
    ?>
    <?php
    $a = 4;
    $b = 5;
    $a += $b; //данное выражение увеличивает перменную a на величину переменной b.
    echo 'a = ' . $a;
    $a = 0;
    echo $a++; //Возвращает значение $a, затем увеличивает $a на единицу. Выведет 0.
    echo ++$a; //Увеличивает $a на единицу, затем возвращает значение $a. Выведет 2, так как переменная $a равна 1.
    echo $a--; //Возвращает значение $a, затем уменьшает $a на единицу. Выведет 2.
    echo --$a; //Уменьшает $a на единицу, затем возвращает значение $a. Выведет 0, так как переменная $a равна 1.
    ?>
    <?php
    $a = 4;
    $b = 5;
    var_dump($a == $b);  // Выведет false
    var_dump($a === $b); // Выведет false
    var_dump($a > $b);    // Выведет false
    var_dump($a < $b);    // Выведет true
    var_dump($a <> $b);  // Выведет true
    var_dump($a != $b);   // Выведет true
    var_dump($a !== $b); // Выведет true
    var_dump($a <= $b);  // Выведет true
    var_dump($a >= $b);  // Выведет false
    ?>
</div>
<div class="task_3">
    <?php
    $a = 5;
    $b = '05';
    var_dump($a == $b); //Выводится true, так как сравнение производится не по строгому равенству.
    var_dump((int)'012345'); //В этой записи строка преобразуется в целое число, поэтому мы видим 12345
    var_dump((float)123.0 === (int)123.0); //Выводится false, так как в правой части целое число, а слева число с плавающей точкой.
    var_dump((int)0 === (int)'hello, world'); //Выводится true, так как 0 равен 0.
    ?>
</div>
<div class="task_4">
    <?php
    $a = 1;
    $b = 2;
    $a = $b;
    $b--;
    echo $a;
    echo $b;
    ?>
</div>
</body>
</html>
