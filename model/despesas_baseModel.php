<?php 
    class Despesas_baseModel {
            protected $idBase;
            protected $nomeBase;
            protected $responsavelBase;
            protected $telefoneBase;
            protected $celularBase;
            protected $ativo;

            protected $emailBase;

            protected $idUsario = 1;

            function __construct($idBase, $nomeBase, $responsavelBase, $telefoneBase, $celularBase,$emailBase, $ativo){
                $this->idBase = $idBase;
                $this->nomeBase = $nomeBase;
                $this->responsavelBase = $responsavelBase;
                $this->telefoneBase = $telefoneBase;
                $this->celularBase = $celularBase;
                $this->emailBase = $emailBase;
                $this->ativo = $ativo;
            }

            function cadastrarBase(Despesas_baseModel $auto){
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao();
                $auto ->cadastrarBase($this);
            }
            function listarBase(){
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao(null);
                return $auto->listarBase();
            }
            function excluirBase($idBase){
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao();
                $auto ->excluirBase($idBase);
            }
            function alterarBase($auto){
                include_once "../DAO/despesasDao.php";
                $auto = new despesasDao();
                $auto ->alterarBase($this);
            }
         

            public function getIdUsario(){
                return $this->idUsario;
            }
            public function setIdUsario($idUsario){
                $this->idUsario = $idUsario;
            }
            public function getIdBase(){
                return $this->idBase;
            }
            public function getNomeBase(){
                return $this->nomeBase;
            }
            public function getResponsavelBase(){
                return $this->responsavelBase;
            }
            public function getTelefoneBase(){
                return $this->telefoneBase;
            }
            public function getCelularBase(){
                return $this->celularBase;
            }
            public function getEmailBase(){
                return $this->emailBase;
            }
            public function getAtivo(){
                return $this->ativo;
            }
            public function setIdBase($idBase){
                $this->idBase = $idBase;
            }
            public function setNomeBase($nomeBase){
                $this->nomeBase = $nomeBase;
            }
            public function setResponsavelBase($responsavelBase){
                $this->responsavelBase = $responsavelBase;
            }
            public function setTelefoneBase($telefoneBase){
                $this->telefoneBase = $telefoneBase;
            }
            public function setCelularBase($celularBase){
                $this->celularBase = $celularBase;
            }
            public function setEmailBase($emailBase){
                $this->emailBase = $emailBase;
            }
            public function setAtivo($ativo){
                $this->ativo = $ativo;
            }
           
         






    }




?>
