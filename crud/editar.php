<?php
include("../database/connection.php");
include("./pessoa.php");

if ($_POST) {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $fone = $_POST["fone"];
  $id = $_POST["id"];

  $query = "UPDATE contatos SET nome = :r_nome, email = :r_email, fone = :r_fone WHERE id = :r_id";

  $update = $connection->prepare($query);
  $update->bindParam(":r_nome", $nome);
  $update->bindParam(":r_email", $email);
  $update->bindParam(":r_fone", $fone);
  $update->bindParam(":r_id", $id);

  $result = $update->execute();
  $editado = $result && $update->rowCount();
} else {
  header("location: ../cadastro.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="jumbotron">
    <div class="text-center">
      <h3>Edição de contato</h3>
      <small> <?php echo $editado ? "O contato {$nome} foi alterado com sucesso!" : "Houve um erro ao atualizar o contato."; ?> </small>
    </div>
  </div>

  <div class="container">
    <div class="text-center">
      <a href="../index.php" class="btn btn-success">Voltar à página inicial</a>
    </div>
  </div>
</body>

</html>