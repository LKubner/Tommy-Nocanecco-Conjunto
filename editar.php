<?php

include_once 'conecta.php';

$id_produto = $_GET['id_produto'];
$qtd = $_GET['qtd'];
$nome = $_GET['nome'];

$sql = "UPDATE produto SET nome = '$nome', qtd = '$qtd' WHERE id_produto = '$id_produto'";
$query_editar = mysqli_query($connect,$sql);

if ($query_editar)

{
	header('Location: listar.php');
	
}

else {
	echo "deu erro";
}
?>