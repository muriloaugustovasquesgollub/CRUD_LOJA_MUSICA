<?php

session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if  ($usuario == "admin" & $senha == "1234") {
     $_SESSION["logado"] = true;
     $_SESSION["usuario"] = $usuario;
     header("location: Listar.php");    
} else {
    $_SESSION["erro"] = "Usuario ou senha incorretos!";
    header("Location: index.php");
}