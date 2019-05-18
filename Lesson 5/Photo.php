<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'PHP1'
);

if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "SELECT url, name, count FROM gallery WHERE id = $id";
    mysqli_query($link, "UPDATE gallery SET count = count + 1 WHERE id = $id");
    $res = mysqli_query($link, $sql);
}

$row = mysqli_fetch_assoc($res);




$html = <<<php
    <div class="big-image">
        <img src="{$row['url']}" alt="{$row['name']}">
        <p>Количество просмотров равно {$row['count']}</p>
    </div>
php;

echo $html;
