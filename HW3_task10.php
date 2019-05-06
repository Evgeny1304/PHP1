<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения - Задание 10</title>
    <style>
        .container {
            width: 530px;
            margin: 0 auto;
        }

        .line {
            display: flex;
        }

        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
        }

        .column {
            display: flex;
            flex-direction: column;
            float: left;
        }

        .box-bg {
            background-color: #c7c9c7;
            font-weight: 700;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Таблица умножения</h1>
    <?php
    //Отрисовка строки со множителями
    echo '<div class="line">';
    for ($k = 0; $k <= 9; $k++) {
        if ($k === 0) {
            echo '<div class="box box-bg">' . '</div>';
        } else {
            echo '<div class="box box-bg">' . $k . '</div>';
        }
    }
    echo '</div>';

    //Отрисовка столбца с цифрами
    echo '<div class="column">';
    for ($l = 1; $l <= 9; $l++) {
        echo '<div class="box box-bg">' . $l . '</div>';
    }
    echo '</div>';

    //Отрисовка таблицы умножения
    echo '<div class="table">';
    for ($i = 1; $i <= 9; $i++) {
        echo '<div class="line">';
        for ($j = 1; $j <= 9; $j++) {
            echo '<div class="box">' . ($i * $j) . '</div>';
        }
        echo '</div>';
    }
    echo '</div>';
    ?>
</div>
</body>
</html>
