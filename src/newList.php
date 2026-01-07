<?php

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
    <form class="list-form">
        <div class="form-group">
            <label for="name">Nome da Lista</label>
            <input type="text" id="name" placeholder="Ex: Trabalho, Estudos">
        </div>

        <div class="form-group">
            <label for="description">Descrição (opcional)</label>
            <textarea id="description" rows="4" placeholder="Descreva o objetivo da lista"></textarea>
        </div>

        <div class="form-actions">
            <a href="/" class="btn-secondary">Cancelar</a>
            <button type="button" class="btn-primary">Criar Lista</button>
        </div>
    </form>

</div>

</body>
</html>
