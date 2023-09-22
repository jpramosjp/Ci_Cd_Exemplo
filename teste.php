<?php
// Recebe um parâmetro GET chamado "username"
$username = $_GET['username'];

// Conecta ao banco de dados (supondo que o banco de dados seja MySQL)
$mysqli = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

// Executa uma consulta SQL insegura
$query = "SELECT nome, email FROM usuarios WHERE username = '$username'";
$result = $mysqli->query($query);

// Processa o resultado da consulta
if ($result) {
    $row = $result->fetch_assoc();
    echo "Nome: " . $row['nome'] . "<br>";
    echo "Email: " . $row['email'];
} else {
    echo "Usuário não encontrado.";
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>
