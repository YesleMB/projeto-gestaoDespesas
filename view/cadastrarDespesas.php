<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="conteiner-central">

        <div class="formulario-cadastro">
            <form action="../controller/processoController.php" method="post">
                <label for="nomeDespesa">Nome da Despesa</label>
                <input type="text" name="nomeDespesa" value="<?php echo isset($nomeDespesa) ? $nomeDespesa : ''; ?>">
                <br>
                <label for="idCredor">ID Credor</label>
                <input type="text" name="idCredor" value="<?php echo isset($idCredor) ? $idCredor : ''; ?>">
                <br>
                <label for="ativo">Ativo?</label>
                <input type="radio" id="ativoS" name="ativo" value="S" <?php echo (isset($ativo) && $ativo == 'S') ? 'checked' : ''; ?>> (S) Sim
                <input type="radio" id="ativoN" name="ativo" value="N" <?php echo (isset($ativo) && $ativo == 'N') ? 'checked' : ''; ?>> (N) Não
                <br>
                <input type="hidden" name="op" value="incluirDespesa">
                <input type="submit" value="Cadastrar Despesa">
             
            </form>
        </div>
        <a href="../view//listarDespesa.php"><buttto>Listar Despesas</buttto></a>
        <a href="../view/menu.php"><buttto>menu</buttto></a>
    </div>

</body>

</html>