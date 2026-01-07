<?php

session_start();
session_regenerate_id(); //Não funciona bem para conexões instáveis (mobile, Wifi). Pesquisar solução de contorno https://www.php.net/session_regenerate_id


require_once __DIR__ . '/../vendor/autoload.php';

$routes = require_once __DIR__ . '/../config/routes.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];
$key = "$httpMethod|$uri";

if(array_key_exists($key, $routes)) {
    $exibitionView = $routes[$key];
    if (array_key_exists('logged', $_SESSION)) {
        if($uri === '/login' || $uri === '/register') {
            header('Location: /');
            exit();
        } else {
            require_once $exibitionView;
            exit();
        }
    } else {
        require_once __DIR__ . '/../src/login.php';
        exit();
    }

} else {
    return http_response_code(404);
}

/* if (array_key_exists('logged', $_SESSION)) {
    if($uri === '/login') {
        header('Location: /');
        exit();
    } else {

    }
} else {

} */

/* $isLoginRoute = $uri === '/login';
if (!array_key_exists('logged', $_SESSION) && !$isLoginRoute) {
    header('Location: /login');
    return;
}

if(array_key_exists($key, $routes)) {
    $exibitionView = $routes[$key];
} else {
    return http_response_code(404);
} */

/* require_once $exibitionView; */

?>
