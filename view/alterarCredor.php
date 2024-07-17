<?php  
include_once '../controller/despesaController.php';

if (isset($_GET['idCredor'])) {
    $idCredor = $_GET['idCredor'];

    $credor = DespesasController::buscarCredorPorId($idCredor);

    if ($credor) {
        $nomeCredor = $credor->nomeCredor;
        $responsavelCredor = $credor->responsavelCredor;
        $telefoneCredor = $credor->telefoneCredor;
        $celularCredor = $credor->celularCredor;
        $ativo = $credor->ativo;
    } else {
        echo "<p>Erro: Credor não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>Erro: ID do credor não fornecido!</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Credor</title>
</head>
<body>
    <h1>Alterar Credor</h1>
    <form method="post" action="../controller/processoController.php">
        <input type="hidden" name="idCredor" value="<?php echo $idCredor; ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nomeCredor" value="<?php echo $nomeCredor; ?>">
        <br>
        <label for="responsavel">Responsável:</label>
        <input type="text" id="responsavel" name="responsavelCredor" value="<?php echo $responsavelCredor; ?>">
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefoneCredor" value="<?php echo $telefoneCredor; ?>">
        <br>
        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celularCredor" value="<?php echo $celularCredor; ?>">
        <br>
        <label for="ativo">Ativo:</label>
        <input type="radio" id="ativo" name="ativo" value="S" <?php echo ($ativo == 'S') ? 'checked' : ''; ?>> (S) Sim
        <input type="radio" id="ativo" name="ativo" value="N" <?php echo ($ativo == 'N') ? 'checked' : ''; ?>> (N) Não
        <br>
        <input type="hidden" name="op" value="alterarCredor">
        <input type="submit" value="Realizar Alteração">
    </form>
</body>
</html>
