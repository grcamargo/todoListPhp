<?php

use App\Entity\User;
use App\Repository\UserRepository;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$pathDb = __DIR__ . '/banco.sqlite';
$pdo = new PDO($_ENV['DB_DRIVER'] . ":host=" . $_ENV['DB_HOST'] .";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

if(isset($_POST['cadastrar'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['password_confirmation'];
    $user = new User(null, $name, $email, $password, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));
    $userRepository = new UserRepository($pdo);
    $userRepository->registerUser($user);
    header('Location: /login');
    exit();
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body class="dark">

<div class="register-container">
    <h1>Criar Conta</h1>

    <form class="register-form" method="post" action="">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" placeholder="Seu nome completo">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="********">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********">
        </div>

        <button type="submit" name="cadastrar" class="btn-register">Cadastrar</button>

        <div class="form-footer">
            <span>Já tem conta?</span>
            <a href="login.html">Entrar</a>
        </div>
    </form>
</div>

</body>
</html>
