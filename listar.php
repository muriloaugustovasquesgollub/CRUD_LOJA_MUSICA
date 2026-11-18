<?php
include("protecao.php");
include("conexao.php");

$sql = "select * from instrumentos";
$resultado = mysqli_query($conexao, $sql);

$mensagem = "";
if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION["mensagem"];
    unset($_SESSION["mensagem"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentos</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="caixa">
        <h1>Instrumentos da loja</h1>
        <?php include("menu.php"); ?>

        <?php if ($mensagem != "") { ?>
            <p class="mensagem"><?php echo $mensagem; ?></p>
        <?php } ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            while ($linha = mysqli_fetch_assoc($resultado)) {
                ?>
                <tr>
                    <td><?php echo $linha["id"]; ?></td>
                    <td><?php echo $linha["nome"]; ?></td>
                    <td><?php echo $linha["tipo"]; ?></td>
                    <td><?php echo $linha["marca"]; ?></td>
                    <td>R$ <?php echo number_format($linha["preco"], 2, ",", "."); ?></td>
                    <td><?php echo $linha["estoque"]; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $linha["id"]; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="excluir.php?id=<?php echo $linha["id"]; ?>">Excluir</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>

</html>