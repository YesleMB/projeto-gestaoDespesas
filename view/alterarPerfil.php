<?php
include_once '../controller/despesaController.php';

if (isset($_GET['idPerfil'])) {
    $idPerfil = $_GET['idPerfil'];

    $perfil = DespesasController::buscarPerfilPorId($idPerfil);

    if ($perfil) {
        $nomePerfil = $perfil->nomePerfil;
        $ativo = $perfil->ativo;
    } else {
        echo "<p>Erro: perfil não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>Erro: ID do perfil não fornecido!</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Perfil</title>
</head>
<body>
    <h1>Alterar Perfil</h1>
    <form method="post" action="../controller/processoController.php">
        <input type="hidden" name="idPerfil" value="<?php echo $idPerfil; ?>">

        <label for="nome">Nome do perfil:</label>
        <input type="text" id="nome" name="nomePerfil" value="<?php echo $nomePerfil; ?>">
        <br>
        <label for="ativo">Ativo:</label>
        <input type="radio" id="ativo" name="ativo" value="S" <?php echo ($ativo == 'S') ? 'checked' : ''; ?>> (S) Sim
        <input type="radio" id="ativo" name="ativo" value="N" <?php echo ($ativo == 'N') ? 'checked' : ''; ?>> (N) Não
        <br>
        <input type="hidden" name="op" value="alterarPerfil">
        <input type="submit" value="Realizar Alteração">
    </form>
</body>
</html>
