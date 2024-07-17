<?php 
    class Despesas_perfilModel{
        protected $idPerfil;
        protected $nomePerfil;
        
        protected $ativo;
    
        function __construct($idPerfil,$nomePerfil,$ativo){
            $this->idPerfil = $idPerfil;
            $this->nomePerfil = $nomePerfil;
            $this->ativo = $ativo;
        }
        function cadastrarPerfil($auto){
            include_once "../DAO/despesasDao.php";
            $auto = new DespesasDao();
            $auto ->cadastrarPerfil($this);
        }
        function alterarPerfil($auto){
            include_once "../DAO/despesasDao.php";
            $auto = new DespesasDao();
            $auto ->alterarPerfil($this);
        }
        function excluirPerfil($idPerfil){
            include_once "../DAO/despesasDao.php";
            $auto = new DespesasDao();
            $auto ->excluirPerfil($idPerfil);
        }
        function ativarDesativarPerfil($auto){
            include_once "../DAO/despesasDao.php";
            $auto = new DespesasDao();
            $auto ->ativarDesativarPerfil($this);
        }
        function listarPerfil(){
            include_once "../DAO/despesasDao.php";
            $auto = new DespesasDao(null);
            return $auto ->listarPerfil();
        }
        






        function getIdPerfil(){
            return $this->idPerfil;
        }
        function getNomePerfil(){
            return $this->nomePerfil;
        }
        function getAtivo(){
            return $this->ativo;
        }
        function setIdPerfil($idPerfil){
            $this->idPerfil = $idPerfil;
        }
        function setNomePerfil($nomePerfil){
            $this->nomePerfil = $nomePerfil;
        }
        function setAtivo($ativo){
            $this->ativo = $ativo;
        }
        
    }



?>