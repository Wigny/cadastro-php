<?php
include("./crud/pessoa.php");
include("./database/connection.php");

if ($_GET && $_GET["id"]) {
  $contato = new Pessoa();
  $registro = $contato->getById($connection, $_GET["id"]);

  if (!$registro) {
    $erro = "O código [{$_GET["id"]}] não foi encontrado!";
  }
} else {
  $erro = "Erro de parâmetros!";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atualização de contato</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="jumbotron">
    <h1 class="text-center">Atualizar contato</h1>
  </div>

  <div class="container">

    <?php if (isset($erro)) : ?>

      <div class="alert alert-danger">
        <?php echo $erro ?>
      </div>

    <?php endif ?>

    <?php if (!isset($erro)) : ?>
      <form action="./crud/editar.php" method="post">
        <div class="row">
          <div class="col-1">
            <label for="id">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $registro->id ?>" readonly>
          </div>
          <div class="col">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $registro->nome ?>" required>
          </div>
          <div class="col">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" value="<?php echo $registro->email ?>" required>
          </div>
          <div class="col">
            <label for="fone">Telefone</label>
            <input type="text" class="form-control" name="fone" data-mask="(00) 00000-0000" value="<?php echo $registro->fone ?>" required>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <button class="btn btn-success btn-block" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    <?php endif ?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>