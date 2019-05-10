<?php
//Задание 1
echo 'Задание 1' . '</br>';
$a = 0;
while ($a <= 100) {
    if ($a % 3 === 0) {
        echo $a . ' ';
    }
    $a++;
}
echo '<hr>';

//Задание 2
echo 'Задание 2' . '</br>';
$i = 0;
do {
    if ($i === 0) {
        echo $i . ' - ноль' . '</br>';
    } elseif ($i % 2 === 0) {
        echo $i . ' - чётное' . '</br>';
    } else {
        echo $i . ' - нечётное' . '</br>';
    }
    $i++;
} while ($i <= 10);
echo '<hr>';

//Задание 3
echo 'Задание 3' . '</br>';
$cities = [
    'Московская область' => [
        'Ногинск', 'Королёв', 'Волоколамск', 'Красногорск', 'Балашиха', 'Москва'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург', 'Пушкин', 'Петергоф', 'Всеволожск', 'Кронштадт'
    ],
    'Ярославская область' => [
        'Ярославль', 'Ростов', 'Углич'
    ]
];

foreach ($cities as $key => $value) {
    echo $key . ':' . '</br>';
    echo implode(', ', $value) . '.' . '</br>';
}

echo '<hr>';

//Задание 4
echo 'Задание 4' . '</br>';
$letters = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'e',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'i',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => 'ie',
    'ы' => 'i',
    'ь' => 'ie',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
    '_' => '_'
];

function translate($word, $arr)
{
    for ($i = 0; $i < mb_strlen($word); $i++) {
        $key = mb_substr($word, $i, 1, 'utf-8');
        echo $arr[$key];
    }
}

translate('москва', $letters);
echo '<hr>';

//Задание 5
echo 'Задание 5' . '</br>';
function changeSpace($str)
{
    return str_replace(' ', '_', $str);
}

echo changeSpace('Hello Beautiful World');
echo '<hr>';

//Задание 7
echo 'Задание 7' . '</br>';
for ($i = 0; $i <= 9; print $i, $i++) {
}
echo '<hr>';

//Задание 8
echo 'Задание 8' . '</br>';
foreach ($cities as $key => $value) {
    echo $key . ':' . '</br>';
    for ($i = 0; $i < count($value); $i++) {
        if (mb_substr($value[$i], 0, 1, 'utf-8') === 'К') {
            echo $value[$i] . ', ';
        }
    }
    echo '</br>';
}
echo '<hr>';

//Задание 9
echo 'Задание 9' . '</br>';
function translateChangeSpace($word, $arr)
{
    $word = str_replace(' ', '_', $word);
    for ($i = 0; $i < mb_strlen($word); $i++) {
        $key = mb_substr($word, $i, 1, 'utf-8');
        echo $arr[$key];
    }
}

translateChangeSpace('люблю грозу в начале мая', $letters);

