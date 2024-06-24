<?php
$servername = "localhost";
$username = "root";
$password = "39041692"; // sua senha do MySQL
$dbname = "livraria"; // nome do banco de dados

// Criando a conexão
$conn = new mysqli('localhost', 'root', '', 'livraria');

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
