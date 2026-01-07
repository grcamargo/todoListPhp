<?php

use App\Repository\UserRepository;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$pathDb = __DIR__ . '/banco.sqlite';

$pdo = new PDO($_ENV['DB_DRIVER'] . ":host=" . $_ENV['DB_HOST'] .";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);



if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userRepository = new UserRepository($pdo);
    $isValidLogin = $userRepository->loginUser($email, $password);

    if ($isValidLogin) {
            $_SESSION['logged'] = true;
            header('Location: /');
        } else {
            header('Location: /login?sucesso=0');
    }
    
}

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="dark">

<div class="login-container">
    <h1>Entrar</h1>

    <form class="login-form" method="post">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="********">
        </div>

        <button type="submit" name='login' class="btn-login">Entrar</button>

        <div class="form-footer">
            <a href="/register">Cadastrar</a>
        </div>
    </form>
</div>

</body>
</html>
