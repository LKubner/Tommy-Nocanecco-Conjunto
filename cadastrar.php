<?php

$nome_produto = $_POST['nome']; 
$quant = $_POST['quant']; 

$servername="localhost";
$username="root";
$password="";
$db_name="produto";

$connect = mysqli_connect($servername, $username, $password, $db_name);

$sql = "INSERT INTO produtos(produto, quantidade) VALUES ('$nome_produto', $quant)";
$query_compras = mysqli_query($connect,$sql);
