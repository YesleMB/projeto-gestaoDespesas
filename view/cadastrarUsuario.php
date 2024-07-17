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
            <label for="nomeUsuario">Nome do Usuário:</label>
            <input type="text" id="nomeUsuario" name="nomeUsuario" value="<?php echo isset($nomeUsuario) ? $nomeUsuario : ''; ?>">
            <br>
            <label for="emailUsuario">Email:</label>
            <input type="email" id="emailUsuario" name="emailUsuario" value="<?php echo isset($emailUsuario) ? $emailUsuario : ''; ?>">
            <br>
            <label for="loginUsuario">Login:</label>
            <input type="text" id="loginUsuario" name="loginUsuario" value="<?php echo isset($loginUsuario) ? $loginUsuario : ''; ?>">
            <br>
            <label for="senhaUsuario">Senha:</label>
            <input type="password" id="senhaUsuario" name="senhaUsuario" value="<?php echo isset($senhaUsuario) ? $senhaUsuario : ''; ?>">
            <br>
            <label for="telefoneCelular">Telefone Celular:</label>
            <input type="text" id="telefoneCelular" name="telefoneCelular" value="<?php echo isset($telefoneCelular) ? $telefoneCelular : ''; ?>">
            <br>
            <label for="ativo">Usuário é ativo?</label>
            <input type="radio" id="ativoS" name="ativo" value="S" <?php echo (isset($ativo) && $ativo == 'S') ? 'checked' : ''; ?>> (S) Sim
            <input type="radio" id="ativoN" name="ativo" value="N" <?php echo (isset($ativo) && $ativo == 'N') ? 'checked' : ''; ?>> (N) Não
            <br>
            <input type="hidden" name="op" value="incluirUsuario">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <a href="../view/listarUsuario.php"> <button>listar usuario</button></a>
    <a href="../view/menu.php"><button>menu</button></a>
</body>
</html>




</body>

</html>