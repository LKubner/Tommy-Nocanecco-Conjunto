
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Lista<br><br><br>
</body>
</html>
<?php
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM produto";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $protudox = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}
foreach ($produtox as $produto) {
    echo "<tr><td>" . $produto['id_produto'] . "</td>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>" . $produto['qtd'] . "</td>";
    echo '<td><a href="form-alterar.php?id_produto=' .
        $produto['id_produto'] . '">Alterar</td>';
    echo '<td><a href="excluir.php?id_produto=' .
        $usuario['id_produto'] . '">Excluir</td>';
    echo '<br>';}
        
            ?>