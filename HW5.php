<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'PHP1'
);


$sql = "SELECT id, url, name, count FROM gallery ORDER BY gallery . count DESC";
$res = mysqli_query($link,$sql);

while ($row = mysqli_fetch_assoc($res)){
    $html .= <<<php
    <a href="Photo.php?id={$row['id']}" target="_blank"><img src="{$row['url']}" alt="{$row['name']}" width="200" height="150"></a>
php;
}

echo $html;