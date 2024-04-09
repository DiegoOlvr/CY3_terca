<?php 
    include('../conexoes/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
        </tr>
    
    <?php 
    $sql = "SELECT nome, sobrenome FROM pessoas";
    $resultado = $mysqli->query($sql);

    // VERIFICA SE TEM MAIS QUE ZERO LINHAS
    if($resultado->num_rows > 0)
    {
        // MOSTRAR OS VALORES
        while ($row = $resultado->fetch_assoc())
        {
            $nome = $row["nome"];
            $sobrenome = $row["sobrenome"];

            echo "<tr><td>" . $nome . "</td> <td>" . $sobrenome . "</td> </tr>";
        }
    }
    $mysqli->close();
    ?>
    </table>
</body>
</html>