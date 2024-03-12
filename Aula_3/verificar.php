<?php 
include('conexao.php');

if( isset($_POST['email']) || isset($_POST['pass']) )
{
    if(strlen($_POST['email']) == 0)
    {
        echo "Preencha o seu e-mail!!!";
    }
    else if (strlen($_POST['pass']) == 0)
    {
        echo "Preencha a sua senha!!!";
    }
    else
    {
        $email = $_POST['email'];
        $senha = $_POST['pass'];

        $sql_codigo = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'" ;

        $sql_query = $mysqli->query($sql_codigo);

        $quantidade_linhas = $sql_query->num_rows;

        if ($quantidade_linhas == 1)
        {
            $usuario = $sql_query->fetch_assoc();

            $id = $usuario['id'];
            $nome = $usuario['nome'];

            echo 'Boa noite Sr(a) ' . $nome . ' seu ID: ' . $id;

        }
    }
}
?>