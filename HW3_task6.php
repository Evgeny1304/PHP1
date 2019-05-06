<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-5">
</head>
<body>
<header>
    <?php
    $menu = [
        'Главная' => 'Главная',
        'Новости' => [
            'Новости о спорте' => [
                'Футбол',
                'Хоккей',
                'Теннис'
            ],
            'Новости о политике',
            'Новости о мире'
        ],
        'Контакты' => 'Контакты',
        'Справка' => 'Справка'
    ];
    echo '<ul class="menu">';
    foreach ($menu as $key => $value) {
        if (is_array($value)) {
            echo '<li>' . '<a href="#">' . $key . '</a>' . '<ul>';
            foreach ($value as $news => $megaMenu) {
                if (is_array($megaMenu)) {
                    echo '<li>' . '<a href="#">' . $news . '</a>' . '<ul>';
                    foreach ($megaMenu as $sportNews) {
                        echo '<li>' . '<a href="#">' . $sportNews . '</a>' . '</li>';
                    }
                    echo '</ul>';
                    echo '</li>';
                } else {
                    echo '<li>' . '<a href="#">' . $megaMenu . '</a>' . '</li>';
                }
            }
            echo '</ul>';
            echo '</li>';
        } else {
            echo '<li>' . '<a href="#">' . $key . '</a>' . '</li>';
        }
    }
    echo '</ul>';
    ?>
</header>
<h1>Создание меню</h1>
<p>Задание 6</p>

</body>
</html>
