<?php

include('../database/connection.php');
include('./pessoa.php');

if ($_POST) {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $fone = $_POST["fone"];

  $query = "INSERT INTO contatos (nome, email, fone) VALUES (:r_nome, :r_email, :r_fone)";

  $insert = $connection->prepare($query);
  $insert->bindParam(":r_nome", $nome);
  $insert->bindParam(":r_email", $email);
  $insert->bindParam(":r_fone", $fone);

  $result = $insert->execute();

  $salvo = $result && $insert->rowCount();
} else {
  header('location: ./cadastro.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salvar</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="jumbotron">
    <div class="text-center">
      <h3>Salvamento de contato</h3>
      <small> <?php echo $salvo ? "O contato {$nome} foi salvo com sucesso!" : "Houve um erro ao salvo o contato."; ?> </small>
    </div>
  </div>

  <div class="container">
    <div class="text-center">
      <a href="../index.php" class="btn btn-success">Voltar à página inicial</a>
    </div>
  </div>
</body>

</html>