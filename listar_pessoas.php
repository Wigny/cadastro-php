<?php

include('./database/connection.php');
include('./pessoa.php');

$query = "select nome, email, fone from contatos";

$select = $connection->prepare($query);
$select->execute();

$pessoas = $select->fetchAll(PDO::FETCH_OBJ);
