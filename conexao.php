<?php

$host = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'loja_musica';       
 $conexao = mysqli_connect($host, $usuario, $senha, $banco);

 if (!$conexao) {
    die ("Erro na conexão");
 }

 mysqli_set_charset($conexao, "utf8");