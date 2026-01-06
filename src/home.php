<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minhas Listas</title>
    <link rel="stylesheet" href="../css/lists.css">
</head>
<body class="dark">


<a href="/itens"  title="Meus itens"><button>Meus itens</button></a>
<a href="/login" title="Login"><button>Login</button></a></a>
<a href="/register" title="Register"><button>Register</button></a></a>


<div class="app-container">

    <!-- Header -->
    <header class="header">
        <h1>Minhas Listas</h1>

        <div class="header-actions">
            <button class="theme-toggle" title="Alternar tema">🌙</button>
            <button class="logout" title="Sair">Sair</button>
        </div>
    </header>

    <!-- Botão nova lista -->
    <div class="toolbar">
        <button class="btn-primary">+ Nova Lista</button>
    </div>

    <!-- Listagem -->
    <ul class="lists">
        <li class="list-card">
            <div class="list-info">
                <h2>Trabalho</h2>
                <p>Tarefas relacionadas ao trabalho</p>
                <small>Criada em: 01/01/2026</small>
            </div>

            <div class="list-actions">
                <button title="Abrir">📂</button>
                <button title="Editar">✏️</button>
                <button title="Excluir">🗑️</button>
            </div>
        </li>

        <li class="list-card">
            <div class="list-info">
                <h2>Pessoal</h2>
                <p>Coisas do dia a dia</p>
                <small>Criada em: 15/12/2025</small>
            </div>

            <div class="list-actions">
                <button title="Abrir">📂</button>
                <button title="Editar">✏️</button>
                <button title="Excluir">🗑️</button>
            </div>
        </li>
    </ul>

</div>

</body>
</html>