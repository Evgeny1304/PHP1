<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 4</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 auto;
            width: 700px;
        }

        .button_img {
            outline: 0;
            border: none;
            background: none;
            cursor: pointer;
        }

        .modal_img {
            display: none;
            position: fixed;
            z-index: 1;
            left: 500px;
            top: 320px;
            overflow: auto;
            background: rgba(0, 0, 0, 0);
        }

        .close {
            font-weight: 700;
            font-size: 50px;
            border: none;
            background: none;
            outline: 0;
            cursor: pointer;
            position: relative;
            left: 635px;
            bottom: 320px;
            color: #3D3BDD;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    echo '<h3>' . 'Задание 1' . '</h3>';
    $gallery = [
        'aston' => 'img/aston-big.jpg',
        'bugatti' => 'img/bugatti-big.jpg',
        'ferrari' => 'img/ferrari-big.jpg',
        'lambo' => 'img/lambo-big.jpg',
        'mclaren' => 'img/mclaren-big.jpg',
        'porsche' => 'img/porsche-big.jpg'
    ];
    echo '<div class="gallery">';

    foreach ($gallery as $image => $bigImg) {
        echo '<a href="' . $bigImg . '" target="_blank">' . '<img src="' . $bigImg . '" alt="image" width="200" height="150">' . '</a>';
    }

    echo '</div>';
    echo '<hr>';

    echo '<h3>' . 'Задание 2' . '</h3>';
    $dir = 'img/';
    $images = scandir($dir);

    echo '<div class="gallery">';
    for ($i = 2; $i < count($images); $i++) {
        echo '<a href="' . $dir . $images[$i] . '" target="_blank">' . '<img src="' . $dir . $images[$i] . '" alt="image" width="200" height="150">' . '</a>';
    }

    echo '</div>';
    echo '<hr>';

    echo '<h3>' . 'Задание 3' . '</h3>';
    $dir = 'img/';
    $images = scandir($dir);

    echo '<div class="gallery">';
    for ($i = 2; $i < count($images); $i++) {
        echo '<button class="button_img" type="button" data-id="' . $i . ' ">' . '<img src="' . $dir . $images[$i] . '" alt="image" width="200" height="150">' . '</button>';
    }

    echo '</div>';

    for ($j = 2; $j < count($images); $j++) {
        echo '<div id="' . $j . '" class="modal_img">' . '<div class="modal_content">' . '<button class="close" data-id="' . $j . ' ">' . 'X' . '</button>' . '<img src="' . $dir . $images[$j] . '" width="640" height="370" alt="image">' . '</div>' . '</div>';
    }

    echo '<hr>';

    //Доп. задание
    $dateTime = date('d.m.Y') . ' ' . date('H.i.s');
    file_put_contents('data.txt', $dateTime . PHP_EOL, FILE_APPEND); //создание файла для расчета счетчика
    $counter = count(file('data.txt'));

    if (count(file('log.txt')) === 10) {
        $counter = intdiv($counter, 10);
        copy('log.txt', "log$counter.txt");
        file_put_contents('log.txt', '');
    } else {
        file_put_contents('log.txt', $dateTime . PHP_EOL, FILE_APPEND);
    }
    ?>
</div>
<script>
    let $button = document.getElementsByClassName("button_img");
    let $close = document.getElementsByClassName("close");

    function handleButtonClick(event) {
        let idModal = this.getAttribute("data-id");
        let $modal = document.getElementById(+idModal);
        $modal.style.display = "block";
    }

    function handleButtonClose(event) {
        let idModal = this.getAttribute("data-id");
        let $modal = document.getElementById(+idModal);
        $modal.style.display = "none";
    }

    for (let i = 0; i < $button.length; i++) {
        $button[i].addEventListener("click", handleButtonClick);
        $close[i].addEventListener("click", handleButtonClose);
    }
</script>
</body>
</html>
