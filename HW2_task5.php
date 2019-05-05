<?php
$html = file_get_contents('task5_hw2.html');
$html = str_replace('{Title}', 'Задание 5 к ДЗ2', $html);
$html = str_replace('{Name}', 'Задание 5 к ДЗ2 по PHP', $html);
$html = str_replace('{Year}', date('Y'), $html);

echo $html;