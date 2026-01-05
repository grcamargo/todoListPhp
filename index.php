<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dark">

<div class="todo-container">
    <div class="header">
        <h1>Minha To-Do List</h1>

        <div class="header-actions">
            <button class="theme-toggle" title="Alternar tema">🌙</button>
            <button class="logout" title="Sair">Sair</button>
        </div>
    </div>

    <div class="todo-input">
        <input type="text" placeholder="Adicionar nova tarefa">
        <button>Adicionar</button>
    </div>

    <ul class="todo-list">

        <!-- Item pendente -->
        <li>
            <div class="task-content">
                <span class="task-title">Estudar HTML e CSS</span>
                <div class="task-meta">
                    <small>Criado: 05/01/2026 10:30</small>
                    <small>Editado: 05/01/2026 10:30</small>
                </div>
            </div>

            <div class="task-actions">
                <button class="mark-done" title="Marcar como feito">✔</button>
                <button class="undo" title="Desfazer">↩</button>
                <button class="edit">✏️</button>
                <button class="delete">🗑️</button>
            </div>
        </li>

        <!-- Item concluído -->
        <li class="done">
            <div class="task-content">
                <span class="task-title">Criar layout da To-Do List</span>
                <div class="task-meta">
                    <small>Criado: 04/01/2026 18:20</small>
                    <small>Editado: 04/01/2026 19:00</small>
                </div>
            </div>

            <div class="task-actions">
                <button class="mark-done" title="Marcar como feito">✔</button>
                <button class="undo" title="Desfazer">↩</button>
                <button class="edit">✏️</button>
                <button class="delete">🗑️</button>
            </div>
        </li>

    </ul>
</div>

</body>
</html>
