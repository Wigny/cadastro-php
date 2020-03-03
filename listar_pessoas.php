<?php

include('./database/connection.php');
include('./pessoa.php');

$query = "SELECT * FROM contatos";

$select = $connection->prepare($query);
$select->execute();

$pessoas = $select->fetchAll(PDO::FETCH_OBJ);
