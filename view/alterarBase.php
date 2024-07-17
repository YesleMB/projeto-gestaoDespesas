
<?php   
include_once '../controller/despesaController.php';

if (isset($_GET['idBase'])) {
    $idBase = $_GET['idBase'];

    $base = DespesasController::buscarBasePorId($idBase);

    if ($base) {
        $nomeBase = $base->nomeBase;
        $responsavelBase = $base->responsavelBase;
        $telefoneBase = $base->telefoneBase;
        $celularBase = $base->celularBase;
        $emailBase = $base->emailBase; 
        $ativo = $base->ativo;
    } else {
        echo "<p>Erro: Base não encontrada!</p>";
        exit;
    }
} else {
    echo "<p>Erro: ID da Base não fornecido!</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Base</title>
</head>
<body>
    <h1>Alterar Base</h1>
    <form method="post" action="../controller/processoController.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nomeBase" value="<?php echo htmlspecialchars($nomeBase); ?>">
        <br>
        <label for="responsavel">Responsável:</label>
        <input type="text" id="responsavel" name="responsavelBase" value="<?php echo htmlspecialchars($responsavelBase); ?>">
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefoneBase" value="<?php echo htmlspecialchars($telefoneBase); ?>">
        <br>
        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celularBase" value="<?php echo htmlspecialchars($celularBase); ?>">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="emailBase" value="<?php echo htmlspecialchars($emailBase); ?>">
        <br>
        <label for="ativo">Ativo:</label>
        <input type="radio" id="ativo" name="ativo" value="S" <?php echo ($ativo == 'S') ? 'checked' : ''; ?>> (S) Sim
        <input type="radio" id="ativo" name="ativo" value="N" <?php echo ($ativo == 'N') ? 'checked' : ''; ?>> (N) Não
        <br>
        <input type="hidden" name="idBase" value="<?php echo $idBase; ?>">
        <input type="hidden" name="op" value="alterarBase">
        <input type="submit" value="Realizar Alteração">
    </form>
</body>
</html>

