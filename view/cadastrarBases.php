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
    <form method="post" action ="../controller/processoController.php">
        <label for="nomeBase">nome do base</label>
        <input type="text" name = "nomeBase" value = <?php $nomeBase ?>>
        <br>
        <label for="responsavelBase"> responsavel</label>
        <input type="text" name = "responsavelBase" value =<?php $responsalBase  ?>>
        <br>
        <label for="telefoneBase">telefone</>
        <input type="text"name = "telefoneBase" value = <?php $telefoneBase ?> >
        <br>
        <label for="celularBase">celular</label>
        <input type="text" name = "celularBase" value = <?php $celularBase  ?> >
        <br>
        <label for="emailBase">email</label>
        <input type="text" name="emailBase" value=<?php $emailBase   ?>>
        <br>
        <label for="ativo">base é ativo?</label>
        <br>
        <input type="radio" id="ativoSim" name="ativo" value="S" <?php echo (isset($_POST['ativo']) && $_POST['ativo '] == 'S') ? 'checked' : ''; ?>> (S) Sim
        <input type="radio" id="ativoNao" name="ativo" value="N" <?php echo (isset($_POST['ativo']) && $_POST['ativo'] == 'N') ? 'checked' : ''; ?>> (N) Não
        <br>
        <input type="hidden" name="op" value="IncluirBase">
        <input type="submit" value="Cadastrar">  
    </form>
       
    </div>
    <a href="../view/listaBase.php"> <button>listar base</button></a>
    <a href="../view/menu.php"><button>menu</button></a>