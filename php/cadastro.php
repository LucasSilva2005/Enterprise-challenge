<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Safebet";

//Criar conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

//verificar a conexão
if ($conn->connect_error) {
 die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
?>