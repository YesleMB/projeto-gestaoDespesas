<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de usuários</title>
</head>
<body>
  <h1>Lista de usuários</h1>
  <?php
  include_once '../controller/despesaController.php';

  try {
    $res = DespesasController::listarUsuario();
    if ($res) {
        $qtd = $res->rowCount();
        if ($qtd > 0) {
          echo "<table border='1'>";
          echo "<tr>";
          echo "<th>id Usuario</th>";
          echo "<th>Id perfil</th>";
          echo "<th>Nome Usuario</th>";
          echo "<th>email</th>";
          echo "<th>senha</th>";
          echo "<th>login</th>";
          echo "<th>telefone</th>";
          echo "<th>Ativo</th>";
          echo "<th>Ações</th>";
          echo "</tr>";

          while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
            echo "<td>" . $row->idUsuario . "</td>";
            echo "<td>". $row->idPerfil. "</td>";
            echo "<td>" . $row->nomeUsuario . "</td>";
            echo "<td>" . $row-> senhaUsuario. "</td>";
            echo "<td>" . $row->loginUsuario . "</td>";
            echo "<td>" . $row->emailUsuario . "</td>";
            echo "<td>" . $row->telefoneCelular . "</td>";
            echo "<td>" . $row->ativo . "</td>";
            echo "<td>
                    <button onclick=\"location.href='../view/alterarUsuario.php?op=alterarUsuario&idUsuario=" . $row->idUsuario . "';\">Alterar usuário</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                      location.href='../controller/processoController.php?op=excluirUsuario&idUsuario=" . $row->idUsuario . "';
                    } else { return false; }\">Excluir</button>
                  </td>";
            echo "</tr>";
          }
          echo "</table>";
          echo "<b> <p>Total de usuários: ". $qtd. "</p></b>";
          echo "<a href='../view/cadastrarUsuario.php'><button>Cadastrar nova usuario</button></a>";
          echo "<a href='../view/menu.php'><button>menu</button></a>";


        } else {
          echo "<p>Nenhum registro encontrado!</p>";
        }
    } else {
        echo "<p>Erro ao executar a consulta.</p>";
    }
  } catch (Exception $e) {
    echo "<p>Erro ao listar usuários: " . $e->getMessage() . "</p>";
  }
  ?>
</body>
</html>
