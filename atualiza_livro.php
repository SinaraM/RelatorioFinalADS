<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int)$_POST['id'];
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $autor = $conn->real_escape_string($_POST['autor']);
    $ano = (int)$_POST['ano'];
    $quantidade = (int)$_POST['quantidade'];

    $sql = "UPDATE livros SET titulo='$titulo', autor='$autor', ano=$ano, quantidade=$quantidade WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Livro atualizado com sucesso. <a href='index.html'>Voltar ao início</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
} else {
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM livros WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Livro</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <h2>Atualizar Livro</h2>
    <form action="atualiza_livro.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Título: <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required><br>
        Autor: <input type="text" name="autor" value="<?php echo $row['autor']; ?>" required><br>
        Ano: <input type="number" name="ano" value="<?php echo $row['ano']; ?>" required><br>
        Quantidade: <input type="number" name="quantidade" value="<?php echo $row['quantidade']; ?>" required><br>
        <input type="submit" value="Atualizar Livro">
    </form>
</body>
</html>
