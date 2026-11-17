<?php
 
include("protecao.php");
include("conexao.php");
 
$id = $_GET["id"];
$sql = "SELECT * FROM instrumentos WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);
$instrumento = mysqli_fetch_assoc($resultado);
 
$tipos = array("Guitarra", "Violão", "Baixo", "Bateria", "Teclado", "Sopro", "Acessório");
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar instrumento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
 
<body>
    <div class="caixa">
        <h1>Editar instrumento</h1>
        <?php include("menu.php"); ?>
 
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $instrumento["id"]; ?>">
 
            <label>Nome</label>
            <input type="text" name="nome" value="<?php echo $instrumento["nome"]; ?>">
 
            <label>Tipo</label>
            <select name="tipo">
                <?php
                foreach ($tipos as $tipo) {
                    $selecionado = "";
                    if ($tipo == $instrumento["tipo"]) {
                        $selecionado = "selected";
                    }
                    echo "<option value='$tipo' $selecionado>$tipo</option>";
                }
                ?>
            </select>
 
            <label>Marca</label>
            <input type="text" name="marca" value="<?php echo $instrumento["marca"]; ?>">
 
            <label>Preço</label>
            <input type="number" name="preco" step="0.01" value="<?php echo $instrumento["preco"]; ?>">
 
            <label>Estoque</label>
            <input type="number" name="estoque" value="<?php echo $instrumento["estoque"]; ?>">
 
            <br>
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
 
</html>
 