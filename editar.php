<?php

include_once 'conecta.php';

$id = $_GET['id_produto'];


$sql = "UPDATE lista SET produto = '$nome', quantidade = '$qtd' WHERE id_produto = '$id_produto'";
$query_editar = mysqli_query($connect,$sql);

if ($query_editar)

{
	header('Location: listar.php');
	
}

else {
	echo "deu erro";
}
?>