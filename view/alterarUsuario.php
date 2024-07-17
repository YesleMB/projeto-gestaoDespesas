<?php  
include_once '../controller/despesaController.php';

if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];

    $usuario = DespesasController::buscarUsuarioPorId($idUsuario);

    if ($usuario) {
        $idPerfil = $usuario->idPerfil;
        $nomeUsuario = $usuario->nomeUsuario;
        $emailUsuario = $usuario->emailUsuario;
        $loginUsuario = $usuario->loginUsuario;
        $senhaUsuario = $usuario->senhaUsuario; 
        $telefoneCelular = $usuario->telefoneCelular;
        
        $ativo = $usuario->ativo;
    } else {
        echo "<p>Erro: usuário não encontrado!</p>";
        exit;
    }
} else {
    echo "<p>Erro: ID do usuário não fornecido!</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
</head>
<body>
    <h1>Alterar Usuário</h1>
    <form method="post" action="../controller/processoController.php">
        <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
        
        <label for="idPerfil">ID Perfil:</label>
        <input type="text" id="idPerfil" name="idPerfil" value="<?php echo $idPerfil; ?>">
        <br>
        
        <label for="nome">Nome Usuário:</label>
        <input type="text" id="nome" name="nomeUsuario" value="<?php echo $nomeUsuario; ?>">
        <br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="emailUsuario" value="<?php echo $emailUsuario; ?>">
        <br>
        
        <label for="login">Login:</label>
        <input type="text" id="login" name="loginUsuario" value="<?php echo $loginUsuario; ?>">
        <br>
        
        <label for="telefoneCelular">Telefone/Celular:</label>
        <input type="text" id="telefoneCelular" name="telefoneCelular" value="<?php echo $telefoneCelular; ?>">
        <br>
        
        <label for="senha">Senha:</label>
        <input type="password" name= "senhaUsuario" value="<?php echo $senhaUsuario?>">
        
        <label for="ativo">Ativo:</label>
        <input type="radio" id="ativo" name="ativo" value="S" <?php echo ($ativo == 'S') ? 'checked' : ''; ?>> Sim
        <input type="radio" id="ativo" name="ativo" value="N" <?php echo ($ativo == 'N') ? 'checked' : ''; ?>> Não
        <br>
        
        <input type="hidden" name="op" value="alterarUsuario">
        <input type="submit" value="Realizar Alteração">
    </form>
</body>
</html>

