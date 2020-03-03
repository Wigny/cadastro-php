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
          <th scope="col"> </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pessoas as $pessoa) : ?>
          <tr>
            <th scope="row"> <?php echo $pessoa->id ?></th>
            <td> <?php echo $pessoa->nome ?></td>
            <td> <?php echo $pessoa->email ?></td>
            <td> <?php echo $pessoa->fone ?></td>
            <td><button type="button" class="btn btn-outline-danger">Remover</button> </td>
          <?php endforeach ?>
          </tr>

          <tr>
            <form action="cadastro_salvar.php" method="post">
              <td></td>
              <td> <input type="text" name="nome" class="form-control" /> </td>
              <td> <input type="mail" name="email" class="form-control" /> </td>
              <td> <input type="text" name="fone" class="form-control" data-mask="(99) 99999-9999" /> </td>
              <td><button type="submit" class="btn btn-outline-success">Adicionar</button> </td>
            </form>
          </tr>

      </tbody>
    </table>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>