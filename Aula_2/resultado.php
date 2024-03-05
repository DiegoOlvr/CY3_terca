<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success">
    <?php

    $operacao = $_POST["operacao"];
    $n1 = (int) $_POST["n1"];
    $n2 = (int) $_POST["n2"];

    if ($operacao == 'multiplicacao') {
        echo $n1 * $n2;
    } elseif ($operacao == 'divisao') {
        echo $n1 * $n2;
    } elseif ($operacao == 'adicao') {
        echo $n1 + $n2;
    } elseif ($operacao == 'subtracao') {
        echo $n1 - $n2;
    } else {
        echo 'Operação inválida!!';
    }

    ?>

</body>

</html>