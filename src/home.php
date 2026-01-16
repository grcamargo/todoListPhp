<?php

use App\Entity\TodoList;
use App\Entity\User;
use App\Repository\TodoListRepository;
use App\Repository\UserRepository;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$pdo = new PDO($_ENV['DB_DRIVER'] . ":host=" . $_ENV['DB_HOST'] .";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

$userRepository = new UserRepository($pdo);
$userInfo = $userRepository->getUserInfoById($_SESSION['user_id']);
$todoListRepository = new TodoListRepository($pdo);
$resultList = $todoListRepository->getAllLists($userInfo['id']);

if(isset($_POST['remove'])) {
    $todoListRepository->removeList($_GET['id']);
    header('Location: /');
}

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minhas Listas</title>
    <link rel="stylesheet" href="../css/lists.css">
</head>
<body class="dark">

<div class="app-container">

    <!-- Header -->
    <header class="header">
        <h1>Minhas Listas</h1>

        <div class="header-actions">
            <a href="/logout" title="Logout"><button class="logout" title="Sair">Sair</button></a>
        </div>
    </header>

    <!-- Botão nova lista -->
    <div class="toolbar">
        <a href="/newList" title="newList"><button class="btn-primary">+ Nova Lista</button></a>
    </div>

    <!-- Listagem -->
    <ul class="lists">
        <?php foreach($resultList as $list): ?>
            <li class="list-card">
                <div class="list-info">
                    <h2><?= $list['name']; ?></h2>
                    <p><?= $list['description'];?></p>
                    <small>Criada em: <?= $list['created_at'];?></small>
                </div>

                <div class="list-actions">
                    <a href="/itens"  title="Meus itens"><button title="Abrir">📂</button></a>
                    <a href="/newList"  title="Editar"><button title="Editar">✏️</button></a>
                    <form name="remove" method="POST" action="/?id=<?= $list['id']; ?>">
                        <button name="remove" title="remove" method="post" >🗑️</button>
                    </form>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

</body>
</html>