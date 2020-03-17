<?php
include("../database/connection.php");
include("./pessoa.php");

if ($_POST) {
  $nome = $_POST["nome"];
  $id = $_POST["id"];

  $query = "DELETE FROM contatos WHERE id = :r_id;";

  $update = $connection->prepare($query);
  $update->bindParam(":r_id", $id);

  $result = $update->execute();

  $excluido = $result && $update->rowCount();
} else {
  header("location: ../cadastro.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exclusão</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="jumbotron">
    <div class="text-center">
      <h3>Exclusão de contato</h3>
      <small> <?php echo $excluido ? "O contato {$nome} foi excluido com sucesso!" : "Houve um erro ao excluir o contato."; ?> </small>
    </div>
  </div>

  <div class="container">
    <div class="text-center">
      <a href="../index.php" class="btn btn-success">Voltar à página inicial</a>
    </div>
  </div>
</body>

</html>