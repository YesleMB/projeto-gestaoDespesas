<?php     
    class Despesas_despesasModel{
         protected $nomeDespesas;
    

         protected $ativo = "S";

         protected $idDespesas;

         protected $idUsuario = 1;

         protected $idCredor = 1;

         function __construct($nomeDespesas,$idCredor,$ativo){
             $this->nomeDespesas = $nomeDespesas;
             $this->idCredor = $idCredor;
             $this->ativo = $ativo;
         }
         function cadastrarDespesas($auto){
             include_once '../DAO/despesasDao.php';
             $auto = new despesasDao();
             $auto ->cadastrarDespesa($this);
         }
         function alterarDespesas($auto){
             include_once '../model/Despesas_despesasModel.php';
             $auto = new Despesas_despesasModel();
             $auto ->alterarDespesas($this);
         }
         function excluirDespesas($idDespesas){
             include_once '../DAO/despesasDao.php';
             $auto = new DespesasDao();
             $auto ->excluirDespesas($idDespesas);
         }
         function listarDespesas(){
             include_once '../DAO/despesasDao.php';
             $auto = new DespesasDao();
             $auto ->listarDespesas();
         }

         function getNomeDespesas(){
             return $this->nomeDespesas;
         }
         function getValorDespesas(){
             return $this->valorDespesas;
         }
         function setNomeDespesas($nomeDespesas){
             $this->nomeDespesas = $nomeDespesas;
         }
         function setValorDespesas($valorDespesas){
             $this->valorDespesas = $valorDespesas;
         }
         function getIdDespesas(){
             return $this->idDespesas;
         }
         function setIdDespesas($idDespesas){
             $this->idDespesas = $idDespesas;
         }
         function getIdUsuario(){
             return $this->idUsuario;
         }
         function setIdUsuario($idUsuario){
             $this->idUsuario = $idUsuario;
         }
         function getAtivo(){
             return $this->ativo;
         }
         function setAtivo($ativo){
             $this->ativo = $ativo;
         }
         function getIdCredor(){
             return $this->idCredor;
         }
         function setIdCredor($idCredor){
             $this->idCredor = $idCredor;
         }
         


    }



?>