<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Bases</title>
</head>
<body>
  <h1>Lista de Bases</h1>
  <?php
  include_once '../controller/despesaController.php';

  try {
    $res = DespesasController::listarBase();
    $qtd = $res->rowCount();

    if ($qtd > 0) {
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>#</th>";
      echo "<th>Nome Base</th>";
      echo "<th>Responsável</th>";
      echo "<th>Telefone</th>";
      echo "<th>Celular</th>";
      echo "<th>Email</th>";
      echo "<th>Ativo</th>";
      echo "<th>Ações</th>";
      echo "</tr>";

      while ($row = $res->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        echo "<td>" . $row->idBase . "</td>";
        echo "<td>" . $row->nomeBase . "</td>";
        echo "<td>" . $row->responsavelBase . "</td>";
        echo "<td>" . $row->telefoneBase . "</td>";
        echo "<td>" . $row->celularBase . "</td>";
        echo "<td>" . $row->emailBase . "</td>";
        echo "<td>" . $row->ativo . "</td>";
        echo "<td><button onclick=\"location.href='../view/alterarBase.php?op=alterarBase&idBase=".$row->idBase."';\">Alterar</button>";
        echo "<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                location.href='../controller/processoController.php?op=excluirBase&idBase=".$row->idBase."';
                }
                else{
                    false;
                }\">Excluir</button></td>";
        echo "</tr>";
      }

      echo "</table>";
      echo "<b><p>Total de Bases: ". $qtd. "</p></b>";
      echo "<br>";
      echo "<a href='../view/cadastrarBases.php'><button>Cadastrar nova Base</button></a>";
      echo "<a href='../view/menu.php'><button>menu</button></a>";

      
    } else {
      echo "<p>Nenhum registro encontrado!</p>";
    }
  } catch (Exception $e) {
    echo "<p>Erro ao listar bases: " . $e->getMessage() . "</p>";
  }
  ?>
</body>
</html>
