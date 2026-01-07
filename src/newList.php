<?php

use App\Entity\TodoList;
use App\Repository\TodoListRepository;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$pdo = new PDO($_ENV['DB_DRIVER'] . ":host=" . $_ENV['DB_HOST'] .";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

if(isset($_POST['criar'])) {
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $list = new TodoList(null, null, $name, $description, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));
    $todoListRepository = new TodoListRepository($pdo);
    $todoListRepository->createTodoList($list);
    header('Location: /');
    exit();
}

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Lista</title>
    <link rel="stylesheet" href="../css/newList.css">
</head>
<body class="dark">

<div class="app-container">

    <!-- Header -->
    <header class="header">
        <h1>Criar Nova Lista</h1>
    </header>

    <!-- Form -->
    <form class="list-form" method="post">
        <div class="form-group">
            <label for="name">Nome da Lista</label>
            <input type="text" name="name" id="name" placeholder="Ex: Trabalho, Estudos">
        </div>

        <div class="form-group">
            <label for="description">Descrição (opcional)</label>
            <textarea id="description" name="description" rows="4" placeholder="Descreva o objetivo da lista"></textarea>
        </div>

        <div class="form-actions">
            <a href="/" class="btn-secondary">Cancelar</a>
            <button type="submit" name="criar" class="btn-primary">Criar Lista</button>
        </div>
    </form>

</div>

</body>
</html>
