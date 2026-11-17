<?php
 
include("protecao.php");
include("conexao.php");
 
$id = $_POST["id"];
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];
 
$sql = "UPDATE instrumentos SET nome='$nome', tipo='$tipo', marca='$marca', preco='$preco', estoque='$estoque' WHERE id='$id'";
 
mysqli_query($conexao, $sql);
 
$_SESSION["mensagem"] = "Instrumento atualizado!";
 
header("Location: listar.php");
 