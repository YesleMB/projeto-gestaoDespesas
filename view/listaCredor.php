<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Credores</title>
</head>
<body>
  <h1>Lista de Credores</h1>
  <?php
  include_once '../controller/despesaController.php';

  try {
    $res = DespesasController::listarCredor();
    $qtd = $res->rowCount();

    if ($qtd > 0) {
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>idCredor</th>";
      echo "<th>Nome Credor</th>";
      echo "<th>Responsável</th>";
      echo "<th>Telefone</th>";
      echo "<th>Celular</th>";
      echo "<th>Ativo</th>";
      echo "<th>Ações</th>";
      echo "</tr>";

      while ($row = $res->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        echo "<td>" . $row->idCredor . "</td>";
        echo "<td>" . $row->nomeCredor . "</td>";
        echo "<td>" . $row->responsavelCredor . "</td>";
        echo "<td>" . $row->telefoneCredor . "</td>";
        echo "<td>" . $row->celularCredor . "</td>";
        echo "<td>" . $row->ativo . "</td>";
        echo "<td>
                <button onclick=\"location.href='../view/alterarCredor.php?op=alterarCredor&idCredor=" . $row->idCredor . "';\">Alterar Credor</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                  location.href='../controller/processoController.php?op=excluirCredor&idCredor=" . $row->idCredor . "';
                } else { return false; }\">Excluir</button>
              </td>";
        echo "</tr>";
      }

      echo "</table>";
      echo "<b><p>Total de credores: ". $qtd. "</p></b>";
      echo "<a href='../view/cadastrarCredor.php'><button>Cadastrar nova credor</button></a>";
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
