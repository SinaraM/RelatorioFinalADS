<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $autor = $conn->real_escape_string($_POST['autor']);
    $ano = (int)$_POST['ano'];
    $quantidade = (int)$_POST['quantidade'];

    $sql = "INSERT INTO livros (titulo, autor, ano, quantidade) VALUES ('$titulo', '$autor', $ano, $quantidade)";

    if ($conn->query($sql) === TRUE) {
        echo "Novo livro cadastrado com sucesso. <a href='index.html'>Voltar ao início</a>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
