<?php 
include('conexao.php');

if (
    isset($_POST['nome']) || 
    isset($_POST['sobrenome']) ||
    isset($_POST['email']) ||
    isset($_POST['telefone']) ||
    isset($_POST['tipo']) ||
    isset($_POST['logradouro']) ||
    isset($_POST['numero']) ||
    isset($_POST['senha']) ||
    isset($_POST['confirme-senha'])
    )
{
    $nome = $_POST['nome']; 
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $tipo = $_POST['tipo'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];

    $sql_query = "INSERT INTO clientes ('nome', 'sobrenome', 'email', 'telefone', 'tipo', 'logradouro', 'numero', 'senha')
    VALUES ($nome, $sobrenome,$email, $telefone, $tipo, $logradouro, $numero, $senha)
    ";

    $enviar = $mysqli->query($sql_query);
}
?>