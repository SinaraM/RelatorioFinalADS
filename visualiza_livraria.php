<?php
include 'conecta.php';

$sql = "SELECT id, titulo, autor, ano, quantidade FROM livros";
$result = $conn->query($sql);

echo "<h2>Livros Cadastrados</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Título</th><th>Autor</th><th>Ano</th><th>Quantidade</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["titulo"]. "</td><td>" . $row["autor"]. "</td><td>" . $row["ano"]. "</td><td>" . $row["quantidade"]. "</td>
        <td><a href='atualiza_livro.php?id=" . $row["id"] . "'>Editar</a> | <a href='exclui_livro.php?id=" . $row["id"] . "'>Excluir</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
<a href="index.html">Voltar ao início</a>
