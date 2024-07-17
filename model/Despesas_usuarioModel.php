<?php 
    class Despesas_usuarioModel{
        protected $idUsuario;
        protected $nomeUsuario;
        protected $senhaUsuario;
        protected $emailUsuario;
        protected $loginUsuario;
        protected $telefoneCelular;
        protected $ativo;
        protected $idPerfil = 1;
        
        function __construct($idUsario,$nomeUsuario,$senhaUsuario,$emailUsuario,$loginUsuario,$telefoneCelular,$ativo){
            $this->idUsuario = $idUsario;
            $this->nomeUsuario = $nomeUsuario;
            $this->senhaUsuario = $senhaUsuario;
            $this->emailUsuario = $emailUsuario;
            $this->loginUsuario = $loginUsuario;
            $this->telefoneCelular = $telefoneCelular;
            $this->ativo = $ativo;
        }
        function cadastrarUsuario(Despesas_usuarioModel $auto){
            include_once "../DAO/despesasDao.php";
            $auto = new despesasDao();
            $auto ->cadastrarUsuario($this);
        }
        function alterarUsuario($auto){
            include_once "../DAO/despesasDao.php";
            $auto = new despesasDao();
            $auto ->alterarUsuario($this);
        }
        function excluirUsuario($idUsuario){
            include_once "../DAO/despesasDao.php";
            $auto = new despesasDao();
            $auto ->excluirUsuario($idUsuario);
        }
        function listarUsuario(){
            include_once "../DAO/despesasDao.php";
            $auto = new despesasDao(null);
            return $auto ->listarUsuario();
        }














        function getIdusuario(){
            return $this->idUsuario;

        }

        function getIdPerfil(){
            return $this->idPerfil;
        }

        function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        function getSenhaUsuario(){
            return $this->senhaUsuario;
        }
        function getEmailUsuario(){
            return $this->emailUsuario;
        }
        function getLoginUsuario(){
            return $this->loginUsuario;
        }
        function getTelefoneCelular(){
            return $this->telefoneCelular;
        }
        function getAtivo(){
            return $this->ativo;
        }
        function setTelefoneCelular($telefoneCelular){
            $this->telefoneCelular = $telefoneCelular;
        }
        function setAtivo($ativo){
            $this->ativo = $ativo;
        }
        function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }
        function setSenhaUsuario($senhaUsuario){
            $this->senhaUsuario = $senhaUsuario;
        }
        function setEmailUsuario($emailUsuario){
            $this->emailUsuario = $emailUsuario;
        }
        function setLoginUsuario($loginUsuario){
            $this->loginUsuario = $loginUsuario;
        }
        function setIdPerfil($idPerfil){
            $this->idPerfil = $idPerfil;
        }
        function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }






    }




?>