<?php

require_once("funciones.php");

if (estaLogueado()) {
  header("location:home.php");exit;
}

$usuarioLogueado = traerUsuarioLogueado();

if ($_POST) {
  $errores = validarLogin($_POST);

  if (count($errores) == 0) {
    loguear($_POST["email"]);
    header("location:home.php");exit;
  } else {
    foreach ($errores as $error) {
      echo $error . "<br>";
    }
  }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="fonts/iconos.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Noto+Serif&display=swap" rel="stylesheet">
</head>

<body>
  <header class="fixed-top">
    <nav class="container navbar navbar-dark navbar-expand-md ">
      <!-- LOGO MILA -->
      <a class="navbar-brand" href="home.php">
        <img src="images/logoMila.png" width="100" alt="Logo Mila">
      </a>
      <!-- BOTON MENU -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        MENU <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ITEMS MENU -->
      <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo01">
        <div class="navbar-nav ml-auto primero">
          <a class="nav-item nav-link" href="home.php">HOME</a>
          <a class="nav-item nav-link" href="home.php#elfaq">FAQ</a>
          <a class="nav-item nav-link" href="home.php#elcontacto">CONTACTO</a>
          <a class="nav-item nav-link" href="productos.php">PRODUCTOS</a>
        </div>
        <div class="logReg">
          <a class="nav-item nav-link s1" href="login.php">LOGIN</a>
          <a class="nav-item nav-link s2" href="registro.php">REGISTRO</a>
          <a class="nav-item nav-link s2" href="carrito.php">
            <span class="icon-cart"></span>
          </a>
        </div>
      </div>
    </nav>
  </header>
  <br>

  <main class="container-fluid">
    <h1>Login</h1>
    <form action="login.php" method="post">
      <div class="form-row justify-content-center">
        <div class="form-group col-9 col-sm-9 col-md-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com" required>
        </div>
        <div class="w-100"></div>
        <div class="form-group col-9 col-md-3">
          <label for="pass">Contraseña:</label>
          <input preloader="hola" type="password" class="form-control" id="pass" name="pass" placeholder="Escriba su contraseña" required>
        </div>
        <div class="w-100"></div>
        <div class="form-group form-check elr">
          <input type="checkbox" class="form-check-input" id="recordarme">
          <label class="form-check-label" for="recordarme">
            <p>Recordarme</p>
          </label>
        </div>
        <div class="w-100"></div>
        <button class="btn btn-mio form-group col-5 col-md-1 " type="submit" name="entrar">Entrar</button>
      </div>
    </form>
  </main>

  <footer>
    <div class="footer-copyright row justify-content-center ">
      <img src="images/logoMila2.png" alt="logo">
      <h5>Todos los derechos reservados 2019</h5>
      <a href="#">
        <span class="icon-facebook2"></span>
      </a>
      <a href="#">
        <span class="icon-instagram"></span>
      </a>
      <a href="#">
        <span class=" icon-twitter"></span>
      </a>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
