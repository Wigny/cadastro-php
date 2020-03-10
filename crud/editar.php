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

  if ($result && $update->rowCount()) {
    echo "O contato <b>{$nome}</b> foi alterado com sucesso!";
  } else {
    echo "Houve um erro ao atualizar o contato.";
  }
} else {
  header("location: ../cadastro.php");
}
