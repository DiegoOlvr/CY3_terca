<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>
        Tela de login
    </h1>
    <form action="sessao.php" method="post">
        <div>
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Entrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>