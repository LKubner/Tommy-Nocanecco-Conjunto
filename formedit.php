<?php
include_once 'conecta.php';

$id = $_GET['id_produto'];

$sql = "SELECT * FROM produto WHERE id_produto=$id";

$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_assoc($resultado)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Editar</h1>

    <form action="editar.php" method="get">

        Informe o id do produto:<?php echo $dados['id_produto']?>
        <input type="hidden" value="<?php echo $dados['id_produto']?>" name="id_produto" /> <br>

        nome do produto
        <input type="text" value="<?php echo $dados['nome']?>" name="nome" /> <br>

        Quantidade:
        <input type="number" value="<?php echo $dados['qtd']?>" name="qtd"/> <br> <br>

        <input type="submit" value="Editar" />
    </form>
</body>
</html>