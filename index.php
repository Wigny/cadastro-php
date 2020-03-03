<?php
include("./listar_pessoas.php");

$titulo = "Hello World!";
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

    <h3>Pessoas:</h3>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pessoas as $pessoa) : ?>
          <tr>
            <th scope="row"> <?php echo $pessoa->id ?></th>
            <td> <?php echo $pessoa->nome ?></td>
            <td> <?php echo $pessoa->email ?></td>
            <td> <?php echo $pessoa->fone ?></td>
          <?php endforeach ?>
          </tr>

      </tbody>
    </table>

  </div>
</body>

</html>