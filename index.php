<?php
include_once("Pessoa.php");

$titulo = "Hello World!";

$pessoa1 = new Pessoa("João", "Teixeira");
$pessoa2 = new Pessoa("Lucas", "Racki");
$pessoa3 = new Pessoa("Pedro", "Lucas");

$nomes_obj = [$pessoa1, $pessoa2, $pessoa3];

if ($_POST) {

  $pessoa4 = new Pessoa();
  $pessoa4->receiveData($_POST);

  $nomes_obj[] = $pessoa4;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo ?></title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">

    <a href="/cadastro.php" class="btn btn-secondary">Cadastrar contato</a>

    <h1 class="text-center">
      <?= $titulo ?>
      <small>
        <?php echo date("d/m/Y H:i:s"); ?>
      </small>
    </h1>

    <h3>Lista de pessoas Objeto</h3>
    <ul>
      <?php foreach ($nomes_obj as $obj) : ?>
        <li> <?php echo $obj->getNomeCompleto() ?> </li>
      <?php endforeach ?>
    </ul>

  </div>
</body>

</html>