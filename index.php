<?php

$uri = $_SERVER['REQUEST_URI'];
$views_dir = '/views/';

switch ($uri){
    case '':
    case '/':
        require __DIR__.$views_dir.'home.php';
        break;
    case 'marcas':
        require __DIR__.$views_dir.'marcas.php';
        break;

    default:
        http_response_code(404);
        require __DIR__.$views_dir.'404.php';
}

?>