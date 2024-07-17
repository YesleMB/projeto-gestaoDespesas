<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post" action="../controller/processoController.php">
            <label for="nomePerfil">Nome do perfil:</label>
            <input type="text" id="nomePerfil" name="nomePerfil" value="<?php echo isset($nomePerfil) ? $nomePerfil : ''; ?>">
            <br>
            <input type="radio" id="ativoS" name="ativo" value="S" <?php echo (isset($ativo) && $ativo == 'S') ? 'checked' : ''; ?>> (S) Sim
            <input type="radio" id="ativoN" name="ativo" value="N" <?php echo (isset($ativo) && $ativo == 'N') ? 'checked' : ''; ?>> (N) Não
            <br>
            <input type="hidden" name="op" value="incluirPerfil">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <a href="../view/listarPerfil.php"> <button>listar perfil</button></a>
    <a href="../view/menu.php"><button>menu</button></a>
</body>
</html>