<?php
include("protecao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar instrumento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
 
<body>
    <div class="caixa">
        <h1>Cadastrar instrumento</h1>
        <?php include("menu.php"); ?>
 
        <form action="cadastrar.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome">
 
            <label>Tipo</label>
            <select name="tipo">
                <option value="Guitarra">Guitarra</option>
                <option value="Violão">Violão</option>
                <option value="Baixo">Baixo</option>
                <option value="Bateria">Bateria</option>
                <option value="Teclado">Teclado</option>
                <option value="Sopro">Sopro</option>
                <option value="Acessório">Acessório</option>
            </select>
 
            <label>Marca</label>
            <input type="text" name="marca">
 
            <label>Preço</label>
            <input type="number" name="preco" step="0.01">
 
            <label>Estoque</label>
            <input type="number" name="estoque">
 
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
 
</html>
 