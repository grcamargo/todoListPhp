<?php

$routes = [
    'GET|/' => __DIR__ . '/../src/home.php',
    'POST|/' => __DIR__ . '/../src/home.php',
    'GET|/home' => __DIR__ . '/../src/home.php',
    'POST|/home' => __DIR__ . '/../src/home.php',
    'GET|/itens' => __DIR__ . '/../src/itens.php',
    'POST|/itens' => __DIR__ . '/../src/itens.php',
    'GET|/login' => __DIR__ . '/../src/login.php',
    'POST|/login' => __DIR__ . '/../src/login.php',
    'GET|/register' => __DIR__ . '/../src/register.php',
    'POST|/register' => __DIR__ . '/../src/register.php',
    'GET|/logout' => __DIR__ . '/../src/logout.php',
    'POST|/newList' => __DIR__ . '/../src/newList.php',
    'GET|/newList' => __DIR__ . '/../src/newList.php'
];

return $routes;