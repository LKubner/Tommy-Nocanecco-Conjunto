<?php

$nome = $_POST['nome']; 
$qtd = $_POST['qtd']; 

$servername="localhost";
$username="root";
$password="";
$db_name="produtos";

$connect = mysqli_connect($servername, $username, $password, $db_name);

$sql = "INSERT INTO produto(nome, qtd) VALUES ('$nome', $qtd)";
$query_compras = mysqli_query($connect,$sql);
