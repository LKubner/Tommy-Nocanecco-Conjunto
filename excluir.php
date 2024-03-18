<?php
require_once "conecta.php";
$id_produto = $_GET['id_produto'];
$sql = "DELETE FROM produto WHERE id_produto=$id_produto";
$result = mysqli_query($connect, $sql);
?>