<?php

session_start();

if (isset($_SESSION['logado'])) {
    header("Location: Listar.php");
    exit;
}

$erro = "";
if (isset($_SESSION["erro"])) {
    $erro = $_SESSION["erro"];
    unset($_SESSION["erro"]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Música</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="caixa">
        <h1>Loja de Música</h1>
        <p>Entre para cadastrar os instrumentos.</p>

        <?php if ($erro != "") { ?>
            <p class="erro"><?php echo $erro; ?></p>
        <?php } ?>

        <form action="entrar.php" method="POST">
            <label>Usuário</label>
            <input type="text" name="usuario">

            <label>Senha</label>
            <input type="password" name="senha">

            <br>
            <button type="submit">Entrar</button>
        </form>

        <p class="aviso">Usuário: admin | Senha: 1234</p>
    </div>
</body>

</html>