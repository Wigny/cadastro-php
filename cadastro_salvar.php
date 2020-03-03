<?php

include('./database/connection.php');
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

	var_dump($result);
} else {
	header('location: ./cadastro.php');
}
