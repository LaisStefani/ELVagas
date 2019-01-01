<?php
  session_start();
?>

<!doctype html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="icon" href="imagens/guia.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script type="js/ie-emulation-modes-warning.js"></script>
  </head>
  
  <body class="fundo">
    <div class="container pt-5">
      <div class="card col-md-5 mx-auto mt-5 py-5">
        <form class="form-signin col-md-12" method="POST" action="relatorio.php">
          <h3 class="h3 mb-3 font-weight-normal text-center">Faça login</h3>

          <label for="text" class="sr-only">Usário</label>
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário">    
          <br>
          <label for="inputPassword" class="sr-only">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
          <br>
          <button class="btn btn-lg btn-dark btn-block" type="submit">Entrar</button>
          <script type="js/ie10-viewport-bug-workaround.js"></script>
        </form>
      </div>
  </body>
</html>