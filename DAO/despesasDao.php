<?php
class despesasDao
{
    protected $conn;

    public function __construct() {
        include_once 'conexao.php';
        $conex = new Conexao();
        $this->conn = $conex->fazConexao();
        
    }
    

    function cadastrarCredor(Despesas_credorModel $auto)
    {
        $sql = "INSERT INTO credor (idUsuario, nomeCredor, dataCadastro, responsavelCredor, telefoneCredor, celularCredor, ativo) 
                VALUES (:idUsuario, :nomeCredor, NOW(), :responsavelCredor, :telefoneCredor, :celularCredor, :ativo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nomeCredor', $auto->getNomeCredor());
        $stmt->bindValue(':responsavelCredor', $auto->getResponsavelCredor());
        $stmt->bindValue(':telefoneCredor', $auto->getTelefoneCredor());
        $stmt->bindValue(':celularCredor', $auto->getcelularCredor());
        $stmt->bindValue(':idUsuario', $auto->getIdUsuario());
        $stmt->bindValue(':ativo', $auto->getAtivo());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro realizado com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar o cadastro!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarCredor';</script>";
    }

    function alterarCredor(Despesas_credorModel $auto) {
        $sql = "UPDATE credor SET nomeCredor=?, responsavelCredor=?, telefoneCredor=?, celularCredor=?, ativo=? WHERE idCredor=?";
        
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindValue(1, $auto->getNomeCredor());
        $stmt->bindValue(2, $auto->getResponsavelCredor());
        $stmt->bindValue(3, $auto->getTelefoneCredor());
        $stmt->bindValue(4, $auto->getcelularCredor());
        $stmt->bindValue(5, $auto->getAtivo());
        $stmt->bindValue(6, $auto->getidCredor());
        $res = $stmt->execute();
        
        if ($res) {
            echo "<script>alert('Dados alterados com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro ao alterar dados!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarCredor';</script>";
    }

    function listarCredor()
    {
        $sql = "SELECT * FROM credor ORDER BY idCredor";
        return $this->conn->query($sql); 
    }

    function excluirCredor($idCredor)
    {
        $sql = "DELETE FROM credor WHERE idCredor = :idCredor";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':idCredor', $idCredor);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Exclusão realizada com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar a exclusão!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarCredor';</script>";
    }

    function cadastrarBase(Despesas_baseModel $auto)
    {
        $sql = "INSERT INTO base (idUsuario,nomeBase, dataCadastro, responsavelBase, telefoneBase, celularBase,emailBase, ativo) 
                VALUES (:idUsuario,:nomeBase, NOW(), :responsavelBase, :telefoneBase, :celularBase, :emailBase, :ativo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nomeBase', $auto->getNomeBase());
        $stmt->bindValue(':responsavelBase', $auto->getResponsavelBase());
        $stmt->bindValue(':telefoneBase', $auto->getTelefoneBase());
        $stmt->bindValue(':celularBase', $auto->getcelularBase());
        $stmt->bindValue(':idUsuario', $auto->getIdUsario());
        $stmt->bindValue(':emailBase', $auto->getEmailBase());
        $stmt->bindValue(':ativo', $auto->getAtivo());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro realizado com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar o cadastro!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarBase';</script>";
    }

    function listarBase()
    {
        $sql = "SELECT * FROM base ORDER BY idBase";
        return $this->conn->query($sql); 
    }

    function excluirBase($idBase)
    {
        $sql = "DELETE FROM base WHERE idBase = :idBase";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':idBase', $idBase);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Exclusão realizada com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar a exclusão!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarBase';</script>";
    }

    function alterarBase(Despesas_baseModel $auto)
    {
        $sql = "UPDATE base SET nomeBase=?, responsavelBase=?, telefoneBase=?, celularBase=?, emailBase=?,ativo =? WHERE idBase=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $auto->getNomeBase());
        $stmt->bindValue(2, $auto->getResponsavelBase());
        $stmt->bindValue(3, $auto->getTelefoneBase());
        $stmt->bindValue(4, $auto->getcelularBase());
        $stmt->bindValue(5, $auto->getEmailBase());
        $stmt->bindValue(6, $auto->getAtivo());
        $stmt->bindValue(7, $auto->getIdBase());
        $res = $stmt->execute();
        if ($res) {            
            echo "<script>location.href='../controller/processoController.php?op=listarBase';</script>";

        } else {
            echo "<script>alert('Erro ao alterar dados!!!');</script>";
        }
    }

    

    public function verificarIdCredor($idCredor) {
        $sql = "SELECT COUNT(*) FROM credor WHERE idCredor = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $idCredor);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
    
    public function cadastrarDespesa(Despesas_despesasModel $auto) {
        $sql = "INSERT INTO despesa (nomeDespesa, idCredor, ativo) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $auto->getNomeDespesas());
        $stmt->bindValue(2, $auto->getIdCredor());
        $stmt->bindValue(3, $auto->getAtivo());
        $stmt->execute();
        echo "<script>alert('Erro: Credor não encontrado!');</script>";
        echo "<script>location.href='../view/cadastrarDespesas.php';</script>";
    }



    function cadastrarUsuario(Despesas_usuarioModel $auto){
        $sql = "INSERT INTO usuario (nomeUsuario,idPerfil, emailUsuario, loginUsuario,senhaUsuario,telefoneCelular,ativo ) 
                VALUES (:nomeUsuario,:idPerfil, :emailUsuario, :loginUsuario,:senhaUsuario,:telefoneCelular, :ativo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nomeUsuario', $auto->getNomeUsuario());
        $stmt->bindValue(':senhaUsuario', $auto->getSenhaUsuario());
        $stmt->bindValue(':emailUsuario', $auto->getEmailUsuario());
        $stmt->bindValue(':loginUsuario', $auto->getLoginUsuario());
        $stmt->bindValue(':telefoneCelular', $auto->getTelefoneCelular());
        $stmt->bindValue(':idPerfil', $auto->getIdperfil());
        $stmt->bindValue(':ativo', $auto->getAtivo());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro realizado com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar o cadastro!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarUsuario';</script>";

    }
    function excluirUsuario($idUsuario){
        $sql = "DELETE FROM usuario WHERE idUsuario = :idUsuario";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':idUsuario', $idUsuario);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Exclusão realizada com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar a exclusão!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarUsuario';</script>";

    }
    function alterarUsuario(Despesas_usuarioModel $auto){
        $sql = "UPDATE usuario SET nomeUsuario=?, emailUsuario=?, loginUsuario=?, senhaUsuario=?, telefoneCelular=?, idPerfil=?, ativo=? WHERE idUsuario=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $auto->getNomeUsuario());
        $stmt->bindValue(2, $auto->getEmailUsuario());
        $stmt->bindValue(3, $auto->getLoginUsuario());
        $stmt->bindValue(4, $auto->getSenhaUsuario());
        $stmt->bindValue(5, $auto->getTelefoneCelular());
        $stmt->bindValue(6, $auto->getIdPerfil());
        $stmt->bindValue(7, $auto->getAtivo());
        $stmt->bindValue(8, $auto->getIdUsuario());
        $res = $stmt->execute();
        if ($res) {                     echo "<script>alert('Dados alterados com sucesso!!!');</script>";
 
              echo "<script>location.href='../controller/processoController.php?op=listarUsuario';</script>";

        } else {
            echo "<script>alert('Erro ao alterar dados!!!');</script>";
        }
    }
    function listarUsuario(){
        $sql = "SELECT * FROM usuario ORDER BY idUsuario";
        return $this->conn->query($sql); 
    }
    function cadastrarPerfil(Despesas_perfilModel $auto){
        $sql = "INSERT INTO perfil (nomePerfil, ativo) VALUES (:nomePerfil, :ativo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nomePerfil', $auto->getNomePerfil());
        $stmt->bindValue(':ativo', $auto->getAtivo());
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Cadastro realizado com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar o cadastro!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarPerfil';</script>";

    }
    function excluirPerfil($idPerfil){
        $sql = "DELETE FROM perfil WHERE idPerfil = :idPerfil";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':idPerfil', $idPerfil);
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Exclusão realizada com sucesso!!!');</script>";
        } else {
            echo "<script>alert('Erro: não foi possível realizar a exclusão!!!');</script>";
        }
        echo "<script>location.href='../controller/processoController.php?op=listarPerfil';</script>";
    }
    function alterarPerfil(Despesas_perfilModel $auto){
        $sql = "UPDATE perfil SET nomePerfil=?, ativo=? WHERE idPerfil=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $auto->getNomePerfil());
        $stmt->bindValue(2, $auto->getAtivo());
        $stmt->bindValue(3, $auto->getIdPerfil());
        $res = $stmt->execute();
        
        if ($res) {
            echo "<script>alert('Dados alterados com sucesso!!!');</script>";
            echo "<script>location.href='../controller/processoController.php?op=listarPerfil';</script>";
        } else {
            echo "<script>alert('Erro ao alterar dados!!!');</script>";
        }
    }
    function listarPerfil(){
        $sql = "SELECT * FROM perfil ORDER BY idPerfil";
        return $this->conn->query($sql); 
    }

    
   
  
}
?>
