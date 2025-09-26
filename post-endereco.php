<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Endereço com POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body class="container">
    <h1>Endereço com POST!</h1>

    <form method="POST" action="recebe-endereco.php" > 
  <div class="mb-3">
    <label for="nome" class="form-label">Email address</label>
    <input type="text" class="form-control" id="nome" name="nome" >
  </div>
  <div class="mb-3">
    <label for="ano_nascimento" class="form-label">Ano de Nascimento:</label>
    <input type="number" class="form-control" id="ano_nascimento" name="ano_nascimento">
  </div>
  <div class="mb-3">
    <label for="cidade" class="form-label">Cidade:</label>
    <input type="text" class="form-control" id="cidade" name="cidade">
  </div>
  <div class="mb-3">
    <label for="estado" class="form-label">estado:</label>
    <input type="text" class="form-control" id="text" name="estado">
  </div>
  <div class="mb-3">
    <label for="cpf" class="form-label">CPF:</label>
    <input type="number" class="form-control" id="CPF" name="CPF">
  </div>

  <a href="index.php" class="btn btn-info">VOLTAR</a>

  <button type="reset" class="btn btn-warning">LIMPAR</button>

  <button type="submit" class="btn btn-success">ENVIAR PARA O PHP</button>
  
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>