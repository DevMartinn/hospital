<?php
include("navbar.php");

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
  <form>
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">CRM</label>
    <input type="text" class="form-control">
  </div>


  <div class="mb-3">
    <label for="email1" class="form-label">Email</label>
    <input type="email" class="form-control">
  </div>


  <div class="mb-3">
    <label for="number1" class="form-label">Telefone</label>
    <input type="number" class="form-control">
  </div>

  <label for="espec1" class="form-label">Especialidade</label>
  <select class="form-select" aria-label="Default select example">
  <option selected>Selecione sua especialidade!</option>
  <option value="1">Ortopedista</option>
  <option value="2">Dentista</option>
  <option value="3">Veterinario</option>
</select>

<br>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>