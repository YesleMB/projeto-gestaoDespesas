<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar despesas</title>
</head>
<body>
<h1>Lista de despesas</h1>
  <?php
  include_once '../controller/despesaController.php';

  try {
    $res = DespesasController::listarDespesas();
    $qtd = $res->rowCount();
    

    if ($qtd > 0) {
      print "<table border='1'>";
      print "<tr>";
      print "<th>#</th>";
      print "<th>Nome da despesa</th>";
      print "<th>valor da despesa</th>";
      print "<th>id do credor</th>";
      print "<th>Ativo</th>";
      print "<th>Ações</th>";
      print "</tr>";

      while ($row = $res->fetch(PDO::FETCH_OBJ)) {
        print "<tr>";
        print "<td>" . $row->idDespesas . "</td>";
        print "<td>" . $row->nomeDespesa . "</td>";
        print "<td>" . $row->valorDespesa . "</td>";
        print "<td>" . $row->idCredor . "</td>";
        print "<td>" . $row->ativo . "</td>";
        print "<td><button onclick=\"location.href='../view/alterarBase.php?op=alterarDespesa&idDespesas =".$row->idDespesas."';\">Alterar</button>";
        print "<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                location.href='../controller/processoController.php?op=excluirDespesa&idDespesas=".$row->ididDespesasBase."';
                }
                else{
                    false;
                }\">Excluir</button></td>";
      "</td>";
print "</tr>";
        print "</tr>";
      }

      print "</table>";
      echo "<a href='../view/cadastrarDespesas.php'><button>Cadastrar nova despesa</button></a>";
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