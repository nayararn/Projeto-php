<?php
session_start(); include 'Cabec1.php';?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <title>Hello, world!</title>
  <style>
    .min-height-100vh {
      min-height: 100vh;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center min-height-100vh align-content-center">
    <div class="col-md-4">
      <div>
        <div>
          <img src="https://icons-for-free.com/iconfiles/png/512/friend+human+man+member+person+profile+user+users+icon-1320168707291252637.png" alt="Icon-people" class="icon" style="margin-left: auto;
                    margin-right: auto;
                    display: block;
                    width: 50%;">
          <h3 class="text-center">Efetuar Login</h3>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                ?>
              <div class="alert alert-danger" role="alert">
                Usuário inválido
              </div>
                <?php
            }
            ?>

        </div>
        <form method="POST" action="valida.php">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="E-mail" required="required" name="email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
          </div>
          <button type="submit" class="btn btn-dark btn-block">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>