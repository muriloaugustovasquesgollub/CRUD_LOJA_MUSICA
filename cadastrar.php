<?php

include("protecao.php");
include("conexao.php");

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO instrumentos
(nome, tipo, marca, preco, estoque) VALUES ('$nome',
'$tipo', '$marca', '$preco', '$estoque')";

mysqli_query($conexao, $sql);

$_SESSION["mensagem"] = "Instrumentos cadastro!";

header("location: listar.php");