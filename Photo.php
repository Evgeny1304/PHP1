<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'PHP1'
);

if (! empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "SELECT url, name, count FROM gallery WHERE id = $id";
    $res = mysqli_query($link, $sql);
}

$sql = "UPDATE gallery SET count = count + 1 WHERE id = $id";
$row = mysqli_fetch_assoc($res);

$html = <<<php
<img src="{$row['url']}" alt="{$row['name']}">
<p>Количество просмотров равно {$row['count']}</p>
php;

echo $html;
