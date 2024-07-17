<?php
switch($_REQUEST["op"])
{
    case "incluirCredor": incluirCredor();
        break;
    case "excluirCredor": excluirCredor();
        break;
    case "listarCredor": listarCredor();
        break;
    case "alterarCredor": alterarCredor();
        break;
    case "IncluirBase": incluirBase();
        break;
    case "excluirBase": excluirBase();
        break;
    case "listarBase": listarBase();
        break;
    case "alterarBase": alterarBase();
        break;
    case "incluirDespesa": IncluirDespesa();
        break;
    case "excluirDespesa": excluirDespesa();
        break;
    case "listarDespesa": listarDespesa();
        break;
    case "alterarDespesa": alterarDespesa();
        break; 
    case "incluirUsuario": incluirUsuario();
    break;
    case "excluirUsuario": excluirUsuario();
    break;
    case "listarUsuario": listarUsuario();
    break;
    case "alterarUsuario": alterarUsuario();    
    break;  
    case "incluirPerfil": incluirPerfil();
    break;
    case "excluirPerfil": excluirPerfil();
    break;
    case "listarPerfil": listarPerfil();
    break;
    case "alterarPerfil": alterarPerfil();
    break;
    default: echo "Operação não reconhecida.";    
}






    function incluirCredor(){
        $nomeCredor = $_REQUEST["nomeCredor"];
        $responsavelCredor = $_REQUEST["responsavelCredor"];
        $telefoneCredor = $_REQUEST["telefoneCredor"];
        $celularCredor = $_REQUEST["celularCredor"];
        $ativo = $_REQUEST["ativo"];
        include_once "despesaController.php";
        $auto = new DespesasController();
        $auto->CadastrarCredor($nomeCredor,$responsavelCredor,$telefoneCredor,$celularCredor,$ativo);
    }
    function excluirCredor(){
        $idCredor = $_REQUEST["idCredor"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->excluirCredor($idCredor);
    }
    function listarCredor(){
        include_once '../view/listaCredor.php';
    }
    function alterarCredor(){
        $idCredor = $_REQUEST["idCredor"];
        $nomeCredor = $_REQUEST["nomeCredor"];
        $responsavelCredor = $_REQUEST["responsavelCredor"];
        $telefoneCredor = $_REQUEST["telefoneCredor"];
        $celularCredor = $_REQUEST["celularCredor"];
        $ativo = $_REQUEST["ativo"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->alterarCredor($idCredor,$nomeCredor,$responsavelCredor,$telefoneCredor,$celularCredor,$ativo);
    }

   
    function incluirBase() {
        $nomeBase = $_REQUEST["nomeBase"];
        $responsavelBase = $_REQUEST["responsavelBase"];
        $telefoneBase = $_REQUEST["telefoneBase"];
        $celularBase = $_REQUEST["celularBase"];
        $emailBase = $_REQUEST["emailBase"];
        $ativo = $_REQUEST["ativo"];
        
        include_once "DespesaController.php";
        $auto = new DespesasController();
        $auto->cadastrarBase($nomeBase, $responsavelBase, $telefoneBase, $celularBase, $emailBase, $ativo);
    }
    function listarBase(){
        include_once '../view/listaBase.php';
    }
    function alterarBase(){
        $idBase = $_REQUEST["idBase"];
        $nomeBase = $_REQUEST["nomeBase"];
        $responsavelBase = $_REQUEST["responsavelBase"];
        $telefoneBase = $_REQUEST["telefoneBase"];
        $celularBase = $_REQUEST["celularBase"];
        $emailBase = $_REQUEST["emailBase"];
        $ativo = $_REQUEST["ativo"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->alterarBase($idBase,$nomeBase,$responsavelBase,$telefoneBase,$celularBase,$emailBase,$ativo);
 

    }
    function excluirBase(){
        $idBase = $_REQUEST["idBase"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->excluirBase($idBase);
    }

    function incluirDespesa() {
        $nomeDespesa = $_REQUEST["nomeDespesa"];
        $idCredor = $_REQUEST["idCredor"]; 
        $ativo = $_REQUEST["ativo"];
    
        include_once "despesaController.php";
        $auto = new DespesasController();
        $auto->cadastrarDespesas($nomeDespesa, $idCredor, $ativo);
    
      
    }
    function excluirDespesa(){
        $idDespesa = $_REQUEST["idDespesa"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->excluirDespesa($idDespesa);
    }
    function listarDespesa(){
        include_once '../view/listaDespesa.php';
    }
    function incluirLanmento(){
        $competenciaDespesa = $_REQUEST["competenciaDespesa"];
        $valorLiquido = $_REQUEST["valorLiquido"];
        $valorMulta = $_REQUEST["valorMulta"];
        $valorCorrecao = $_REQUEST["valorCorrecao"];
        $ativoLancamento = $_REQUEST["ativoLancamento"];
        $observacao = $_REQUEST["observacao"];
    }
    function incluirUsuario(){
        $nomeUsuario = $_REQUEST["nomeUsuario"];
        $emailUsuario = $_REQUEST["emailUsuario"];
        $loginUsuario = $_REQUEST["loginUsuario"];
        $senhaUsuario = $_REQUEST["senhaUsuario"];
        $telefoneCelular = $_REQUEST["telefoneCelular"];
        $ativo = $_REQUEST["ativo"];
        include_once "despesaController.php";
        $auto = new DespesasController();
        $auto->cadastrarUsuario($nomeUsuario, $emailUsuario, $loginUsuario, $senhaUsuario, $telefoneCelular, $ativo);



    }
    
    function excluirUsuario(){
        $idUsuario = $_REQUEST["idUsuario"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->excluirUsuario($idUsuario);
    }

    function alterarUsuario(){
        $idUsuario = $_REQUEST["idUsuario"];
        $nomeUsuario = $_REQUEST["nomeUsuario"];
        $emailUsuario = $_REQUEST["emailUsuario"];
        $loginUsuario = $_REQUEST["loginUsuario"];
        $senhaUsuario = $_REQUEST["senhaUsuario"];
        $telefoneCelular = $_REQUEST["telefoneCelular"];
        $ativo = $_REQUEST["ativo"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->alterarUsuario($idUsuario,$nomeUsuario,$emailUsuario,$loginUsuario,$senhaUsuario,$telefoneCelular,$ativo);
    }
    function listarUsuario(){
        include_once '../view/listarUsuario.php';
    }
    function incluirPerfil(){
        $nomePerfil = $_REQUEST["nomePerfil"];
        $ativo = $_REQUEST["ativo"];
        include_once "despesaController.php";
        $auto = new DespesasController();
        $auto->cadastrarPerfil(null,$nomePerfil, $ativo);
    }
    function excluirPerfil(){
        $idPerfil = $_REQUEST["idPerfil"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->excluirPerfil($idPerfil);
    }
    function listarPerfil(){
        include_once '../view/listarPerfil.php';
    }
    function alterarPerfil(){
        $idPerfil = $_REQUEST["idPerfil"];
        $nomePerfil = $_REQUEST["nomePerfil"];
        $ativo = $_REQUEST["ativo"];
        include_once 'despesaController.php';
        $contr = new DespesasController();
        $contr->alterarPerfil($idPerfil,$nomePerfil,$ativo);
    }




    



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>