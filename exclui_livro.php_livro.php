<?php
include 'conecta.php';

$id = (int)$_GET['id'];

$sql = "DELETE FROM livros WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Livro excluído com sucesso. <a href='index.html'>Voltar ao início</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
