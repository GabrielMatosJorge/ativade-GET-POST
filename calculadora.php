<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body class="container bg-light">
   <?= "Olá Mundo!"; ?>

    <h1>Calculadora com POST!</h1>

    <form method="POST" action="calculadora-recebe.php" > 
  <div class="mb-3">
    <label for="numero" class="form-label">Digite um número</label>
    <input type="number" class="form-control" id="numero" name="numero" >
  </div>
  <div class="mb-3">
    <label for="numero2" class="form-label">Digite um número:</label>
    <input type="number" class="form-control" id="numero2" name="numero2">
  </div>
  <div class="mb-3">
    <label for="operacao"> Qual operação:</label>
      <select type="text" class="form-control" placeholder="selecione uma operação" id="operacao" name="operacao">
      <option value="soma"> Soma </option>
      <option value="subtracao"> Subtração </option>
      <option value="multiplicar"> Multiplicação </option>
      <option value="divisao"> Divisão </option>
      </select>
  </div>

  <a href="index.php" class="btn btn-info">VOLTAR</a>

  <button type="reset" class="btn btn-warning">LIMPAR</button>

  <button type="submit" class="btn btn-success">RESULTADO</button>
  
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>