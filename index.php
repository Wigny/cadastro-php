<?php
include("./crud/pessoa.php");
include("./database/connection.php");

$titulo = "Hello World!";

$pessoa = new Pessoa();
$pessoas = $pessoa->buscarTodos($connection);

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


  <div class="jumbotron">
    <div class="text-center">
      <h1> <?= $titulo ?> </h1>
      <small> <?php echo date("d/m/Y H:i:s"); ?> </small>
    </div>
  </div>

  <div class="container">
    <div class="text-center">
      <a href="./cadastro.php" class="btn btn-success">Cadastrar contato</a>
    </div>
    <br>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Telefone</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pessoas as $pessoa) : ?>
          <tr>
            <th scope="row"> <?php echo $pessoa->id ?></th>
            <td><?php echo $pessoa->nome ?></td>
            <td><?php echo $pessoa->email ?></td>
            <td><?php echo $pessoa->fone ?></td>
            <td>
              <a class="btn btn-success btn-outline" href="./editar.php?id=<?php echo $pessoa->id ?>">Atualizar</a>
              <a class="btn btn-danger btn-outline" href="./excluir.php?id=<?php echo $pessoa->id ?>">Excluir</a></td>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

  </div>
</body>

</html>