<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <header>
            <h1>Informações</h1>
        </header>
        <?php
        $email = $_POST["email"];
        $senha = $_POST["pass"];
        const NOME = 'Diego';

        echo "<p>O seu email é $email e a sua senha é $senha</p>" . NOME;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para Formulário</a></p>
    </main>
</body>

</html>