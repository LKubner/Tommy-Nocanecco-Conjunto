
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
require_once "conecta.php";
$sql = "SELECT * FROM produto";
$result = mysqli_query($connect, $sql);
if ($result) {
    $produtox = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($connect) . ": " . mysqli_error($connect);
}
foreach ($produtox as $produto) {
    echo "<tr><td>" . $produto['id_produto']  . "</td>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>" . $produto['qtd'] . "</td>";
    echo '<td><a href="formedit.php?id_produto=' .
        $produto['id_produto'] . '">Alterar</td>  ';
    echo '<td><a href="excluir.php?id_produto=' .
        $produto['id_produto'] . '">Excluir</td>';
    echo '<br>';}
        
            ?>