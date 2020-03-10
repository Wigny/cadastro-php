<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <h2>Cadastro de pessoa</h2>
    </div>

    <form action="./crud/salvar.php" method="post">
      <div class="row">
        <div class="col">
          <label for="">Nome</label>
          <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="col">
          <label for="">E-mail</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="col">
          <label for="">Telefone</label>
          <input type="text" class="form-control" name="fone" data-mask="(99) 99999-9999" required>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <button class="btn btn-primary btn-block" type="submit">Salvar</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>