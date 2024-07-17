<?php 
    class Despesas_credorModel {
            protected $idCredor;
            protected $nomeCredor;
            protected $responsavelCredor;
            protected $telefoneCredor;
            protected $celularCredor;
            protected $ativo;

            protected $idUsario = 1;

            
            function __construct($idCredor,$nomeCredor,$responsavelCredor,$telefoneCredor,$celularCredor,$ativo){
                $this->idCredor = $idCredor;
                $this->nomeCredor = $nomeCredor;
                $this->responsavelCredor = $responsavelCredor;
                $this->telefoneCredor = $telefoneCredor;
                $this->celularCredor = $celularCredor;
                $this->ativo = $ativo;



            }
            function cadastrarCredor(Despesas_credorModel $auto){
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao();
                $auto ->cadastrarCredor($this);
            }
            function alterarCredor(Despesas_credorModel $auto){
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao();
                $auto ->alterarCredor($this);
            }
      
            function excluirCredor($idCredor)
            {
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao();
                $auto->excluirCredor($idCredor);
            }
            function getIdCredor(){
                return $this->idCredor;
            }
            function getNomeCredor(){
                return $this->nomeCredor;
            }
            function getResponsavelCredor(){
                return $this->responsavelCredor;
            }
            function getTelefoneCredor(){
                return $this->telefoneCredor;
            }
            function getCelularCredor(){
                return $this->celularCredor;
            }
            function getAtivo(){
                return $this->ativo;
            }
            function getIdUsuario(){
                    return $this->idUsario;

            }
            function setIdUsario($idUsario){
                $this->idUsario = $idUsario;
            }
            function setIdCredor($idCredor){
                $this->idCredor = $idCredor;
            }
            function setNomeCredor($nomeCredor){
                $this->nomeCredor = $nomeCredor;
            }
            function setResponsavelCredor($responsavelCredor){
                $this->responsavelCredor = $responsavelCredor;
            }
            function setTelefoneCredor($telefoneCredor){
                $this->telefoneCredor = $telefoneCredor;
            }
            function setCelularCredor($celularCredor){
                $this->celularCredor = $celularCredor;
            }
            function setAtivo($ativo){
                $this->ativo = $ativo;
            }
            function listarCredor()
            {
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao(null);
                return $auto->listarCredor();
            }
        






    }




?>

