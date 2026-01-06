<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body class="dark">

<div class="register-container">
    <h1>Criar Conta</h1>

    <form class="register-form">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" placeholder="Seu nome completo">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="seu@email.com">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" placeholder="********">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" id="password_confirmation" placeholder="********">
        </div>

        <button type="button" class="btn-register">Cadastrar</button>

        <div class="form-footer">
            <span>Já tem conta?</span>
            <a href="login.html">Entrar</a>
        </div>
    </form>
</div>

</body>
</html>
