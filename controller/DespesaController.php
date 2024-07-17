<?php
class DespesasController
{

    function cadastrarCredor($nomeCredor, $resposavelCredor, $telefoneCredor, $celularCredor, $ativo)
    {
        include_once "../model/Despesas_credorModel.php";
        $auto = new Despesas_credorModel(null, $nomeCredor, $resposavelCredor, $telefoneCredor, $celularCredor, $ativo);
        $auto->cadastrarCredor($auto);
    }
    function cadastrarBase($nomeBase, $responsavelBase, $telefoneBase, $celularBase, $emailBase, $ativo)
    {
        include_once "../model/Despesas_baseModel.php";
        $auto = new Despesas_baseModel(null, $nomeBase, $responsavelBase, $telefoneBase, $celularBase, $emailBase, $ativo);
        $auto->cadastrarBase($auto);

    }
    
    function cadastrarDespesas($nomeDespesas, $idCredor, $ativo)
    {
        include_once "../model/Despesas_despesasModel.php";
        $auto = new Despesas_despesasModel($nomeDespesas, $idCredor, $ativo);
        $auto->cadastrarDespesas($auto);
    }
    function cadastrarUsuario($nomeUsuario, $emailUsuario, $loginUsario,$senhaUsuario,$telefoneCelular,$ativo){
        include_once "../model/Despesas_usuarioModel.php";
        $auto = new Despesas_usuarioModel(null,$nomeUsuario, $emailUsuario, $loginUsario, $senhaUsuario, $telefoneCelular, $ativo);
        $auto->cadastrarUsuario($auto);

    }
    function cadastrarPerfil($idPerfil,$nomePerfil,$ativo){
        include_once "../model/Despesas_perfilModel.php";
        $auto = new Despesas_perfilModel($idPerfil,$nomePerfil,$ativo);
        $auto->cadastrarPerfil($auto);
    }

    public static function listarCredor()
    {
        include_once "../model/Despesas_credorModel.php";
        $model = new Despesas_credorModel(null, null, null, null, null, null);
        return $model->listarCredor();
    }
    public static function listarBase()
    {
        include_once "../model/Despesas_baseModel.php";
        $model = new Despesas_baseModel(null, null, null, null, null, null, null);
        return $model->listarBase();
    }
    public static function listarDespesas()
    {
        include_once "../model/Despesas_despesasModel.php";
        $model = new Despesas_despesasModel(null, null);
        return $model->listarDespesas();

    }
    public static function listarUsuario(){
        include_once "../model/Despesas_usuarioModel.php";
        $model = new Despesas_usuarioModel(null, null, null, null, null, null,null);
        return $model->listarUsuario();
    }
    public static function listarPerfil(){
        include_once "../model/Despesas_perfilModel.php";
        $model = new Despesas_perfilModel(null, null, null);
        return $model->listarPerfil();
    }
   public function excluirUSuario($idUsuario){
    include_once "../model/Despesas_usuarioModel.php";
        $model = new Despesas_usuarioModel(null, null, null, null, null, null,null);
        $model->excluirUsuario($idUsuario);
   }
    public function excluirCredor($idCredor)
    {
        include_once "../model/Despesas_credorModel.php";
        $model = new Despesas_credorModel(null, null, null, null, null, null);
        $model->excluirCredor($idCredor);
    }
    public function excluirBase($idBase)
    {
        include_once "../model/Despesas_baseModel.php";
        $model = new Despesas_baseModel(null, null, null, null, null, null, null);
        $model->excluirBase($idBase);
    }
    public function excluirDespesas($idDespesas)
    {
        include_once "../model/Despesas_despesasModel.php";
        $model = new Despesas_despesasModel(null, null, null);
        $model->excluirDespesas($idDespesas);
    }
    public function excluirPerfil($idPerfil){
        include_once "../model/Despesas_perfilModel.php";
        $model = new Despesas_perfilModel(null, null, null);
        $model->excluirPerfil($idPerfil);
    }
    function alterarCredor($idCredor, $nomeCredor, $responsavelCredor, $telefoneCredor, $celularCredor, $ativo)
    {
        include_once "../model/Despesas_credorModel.php";
        $model = new Despesas_credorModel($idCredor, $nomeCredor, $responsavelCredor, $telefoneCredor, $celularCredor, $ativo);
        $model->alterarCredor($model);
    }
    function alterarBase($idBase,$nomeBase, $responsavelBase, $telefoneBase, $celularBase, $emailBase, $ativo)
    {
        include_once "../model/Despesas_baseModel.php";
        $model = new Despesas_baseModel($idBase, $nomeBase, $responsavelBase, $telefoneBase, $celularBase, $emailBase, $ativo);
        $model->alterarBase($model);
    }
    function alterarDespesas($nomeDespesas, $valorDespesas)
    {
        include_once "../model/Despesas_despesasModel.php";
        $model = new Despesas_despesasModel(null, $nomeDespesas, $valorDespesas, null);
        $model->alterarDespesas($model);
    }
    function alterarUsuario($idUsuario,$nomeUsuario, $emailUsuario, $loginUsario, $senhaUsuario, $telefoneCelular, $ativo){
        include_once "../model/Despesas_usuarioModel.php";
        $model = new Despesas_usuarioModel( $idUsuario,$nomeUsuario, $emailUsuario, $loginUsario, $senhaUsuario, $telefoneCelular, $ativo);
        $model->alterarUsuario($model);
    }
    public static function alterarPerfil($idPerfil, $nomePerfil, $ativo) {
        include_once '../model/Despesas_perfilModel.php';
        $model = new Despesas_perfilModel($idPerfil, $nomePerfil, $ativo);
        $model->alterarPerfil($model);
    }
    public static function buscarCredorPorId($idCredor) {
        include_once '../DAO/conexao.php';
        $conex = new Conexao();
        $conn = $conex->fazConexao();

        $sql = "SELECT * FROM credor WHERE idCredor = :idCredor";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':idCredor', $idCredor);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public static function buscarBasePorId($idBase) {
        include_once '../DAO/conexao.php';
        $conex = new Conexao();
        $conn = $conex->fazConexao();

        $sql = "SELECT * FROM base WHERE idBase = :idBase";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':idBase', $idBase);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public static function buscarUsuarioPorId($idUsuario) {
        include_once '../DAO/conexao.php';
        $conex = new Conexao();
        $conn = $conex->fazConexao();

        $sql = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':idUsuario', $idUsuario);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public static function buscarPerfilPorId($idPerfil) {
        include_once '../DAO/conexao.php';
        $conex = new Conexao();
        $conn = $conex->fazConexao();

        $sql = "SELECT * FROM perfil WHERE idPerfil = :idPerfil";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':idPerfil', $idPerfil);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
  
  
   
}



?>