<?php
    session_start();
?>
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
<div class="container-fluid">
    <?php
        include 'Cabec1.php';
    ?>
  <div class="row justify-content-center min-height-100vh align-content-center">
    <div class="col-md-4">
      <div>
        <div>
          <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Nyan-Cat-PNG.png" alt="Icon-nyan" class="icon" style="margin-left: auto;
                    margin-right: auto;
                    display: block;
                    width: 50%;">
          <h3 class="text-center">Efetuar Login</h3>
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                ?>
              <div class="alert alert-danger" role="alert">
                Usuário inválido!
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>