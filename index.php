<?php
include_once("pessoa.php");

$titulo = "Hello World!";

$pessoa1 = new Pessoa("João", "teixeira@email.com");
$pessoa2 = new Pessoa("Lucas", "racki@email.com");
$pessoa3 = new Pessoa("Pedro", "lucas@email.com");

$nomes_obj = [$pessoa1, $pessoa2, $pessoa3];

if ($_POST) {

  $pessoa4 = new Pessoa();
  $pessoa4->receiveData($_POST);

  $nomes_obj[] = $pessoa4;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo ?></title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="text-center">
      <?= $titulo ?>
      <small>
        <?php echo date("d/m/Y H:i:s"); ?>
      </small>
    </h1>

    <div class="text-center">
      <a href="/cadastro.php" class="btn btn-success">Cadastrar contato</a>
    </div>

    <h3>Lista de pessoas Objeto</h3>
    <ul>
      <?php foreach ($nomes_obj as $obj) : ?>
        <li> <?php echo $obj->getNome() ?> </li>
      <?php endforeach ?>
    </ul>

  </div>
</body>

</html>