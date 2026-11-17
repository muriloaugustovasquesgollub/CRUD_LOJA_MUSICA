<?php
 
include("protecao.php");
include("conexao.php");
 
$id = $_GET["id"];
$sql = "DELETE FROM instrumentos WHERE id='$id'";
 
mysqli_query($conexao, $sql);
 
$_SESSION["mensagem"] = "Instrumento excluído!";
 
header("Location: listar.php");
 