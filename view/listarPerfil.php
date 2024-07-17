<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de perfil</title>
</head>
<body>
  <h1>Lista de perfil</h1>
  <?php
  include_once '../controller/despesaController.php';

  try {
    $res = DespesasController::listarPerfil();
    $qtd = $res->rowCount();

    if ($qtd > 0) {
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>idPerfil</th>";
      echo "<th>Nome do perfil</th>";
      echo "<th>Ativo</th>";
      echo "<th>Ações</th>";
      echo "</tr>";

      while ($row = $res->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        echo "<td>" . $row->idPerfil . "</td>";
        echo "<td>" . $row->nomePerfil . "</td>";
        echo "<td>" . $row->ativo . "</td>";
        echo "<td>
                <button onclick=\"location.href='../view/alterarPerfil.php?op=alterarPerfil&idPerfil=" . $row->idPerfil . "';\">Alterar pefil</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                  location.href='../controller/processoController.php?op=excluirPerfil&idPerfil=" . $row->idPerfil . "';
                } else { return false; }\">Excluir</button>
              </td>";
        echo "</tr>";
      }

      echo "</table>";
      echo "<b><p>Total de perfis: ". $qtd. "</p></b>";
      echo "<a href='../view/cadastrarPerfil.php'><button>Cadastrar nova Perfil</button></a>";
      echo "<a href='../view/menu.php'><button>menu</button></a>";


    } else {
      echo "<p>Nenhum registro encontrado!</p>";
    }
  } catch (Exception $e) {
    echo "<p>Erro ao listar credores: " . $e->getMessage() . "</p>";
  }
  ?>
</body>
</html>