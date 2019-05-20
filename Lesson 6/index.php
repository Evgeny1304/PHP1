<?php
const PUBLIC_DIR = __DIR__;

include ('config.php');

$page = (int)$_GET['page'];
$del = (int)$_GET['del'];
$id = (int)$_GET['id'];

switch ($page) {
    case 1: include ('pages/mainPage.php'); break;
    case 2: include ('pages/usersPage.php'); break;
    case 3: include ('pages/userAddPage.php'); break;
    case 4: include ('pages/userPage.php'); break;
    case 5: include ('pages/userUpdatePage.php'); break;
    case 6: include ('pages/calculate1.php'); break;
    case 7: include ('pages/calculate2.php'); break;
    default: include ('pages/mainPage.php'); break;
}
$file = file_get_contents('main.html');

echo str_replace('{CONTENT}', $content, $file);
