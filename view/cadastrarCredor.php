<?php


?>
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
            <label for="nomeCredor">nome do credor</label>
            <input type="text" name="nomeCredor" value=<?php $nomeCredor ?>>
            <br>
            <label for="responsavelCredor"> responsavel</label>
            <input type="text" name="responsavelCredor" value=<?php $responsalveCredor ?>>
            <br>
            <label for="telefoneCredor">telefone</label>
            <input type="text" name="telefoneCredor" value=<?php $telefoneCredor ?>>
            <br>
            <label for="celularCredor">celular</label>
            <input type="text" name="celularCredor" value=<?php $celularCredor ?>>
            <br>
            <label for="ativoCredor">credor é ativo?</label>
            <br>
            <input type="radio" id="ativoSim" name="ativo" value="S" <?php echo (isset($_POST['ativo']) && $_POST['ativo'] == 'S') ? 'checked' : ''; ?>> (S) Sim
            <input type="radio" id="ativoNao" name="ativo" value="N" <?php echo (isset($_POST['ativo']) && $_POST['ativo'] == 'N') ? 'checked' : ''; ?>> (N) Não
            <br>
            <input type="hidden" name="op" value="incluirCredor">
            <input type="submit" value="Cadastrar">

        </form>
    </div>
    <a href="../view/listaCredor.php"> <button>listar Credor</button></a>
    <a href="../view/menu.php"><button>menu</button></a>



</body>

</html>