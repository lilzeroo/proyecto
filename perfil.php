<?php

require_once("funciones.php");

$usuarioLogueado = traerUsuarioLogueado();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Pragma" content="no-cache">
  <title>Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/perfil.css">
  <link rel="stylesheet" href="fonts/iconos.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Noto+Serif&display=swap" rel="stylesheet">
  <!-- font-family: 'Alegreya Sans', sans-serif;
    font-family: 'Noto Serif', serif; -->
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
          <?php if ($usuarioLogueado != null) : ?>
            <a class="nav-item nav-link s1" href="perfil.php">MI PERFIL
            <a class="nav-item nav-link s2" href="cerrar_sesion.php">SALIR</a>
          <?php else: ?>
          <a class="nav-item nav-link s1" href="login.php">LOGIN</a>
          <a class="nav-item nav-link s2" href="registro.php">REGISTRO</a>
          <?php endif; ?>
          <a class="nav-item nav-link s2" href="carrito.php">
            <span class="icon-cart"></span>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <main class="container ">
    <h1>Perfil</h1>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-5 col-md-4 col-lg-3 col-xl-2 col-sm-4 col-2">
        <a href="#"><img src="images/avatar.png" alt="Avatar" width="200px"></a>

        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-5 col-xl-4 align-items-sm-center">
          <?php if ($usuarioLogueado != null) : ?>
          <h2 class="title"><?= $usuarioLogueado["nombre"]. " " .$usuarioLogueado["apellido"]?></h2>
          <h3><?= $usuarioLogueado["email"]?></h3>
          </div>
            <div class="w-100"></div>
            <a href="#"><h4>AJUSTES</h4></span></a>

            <?php endif; ?>

    </div>
  </main>

  <footer>
    <div class="footer row justify-content-center">
      <img  src="images/logoMila2.png" alt="logo">
      <h5>Todos los derechos reservados 2019</h5>
      <div class="iconos">
        <a  href="#">
          <span class="icon-facebook2"></span>
        </a>
        <a  href="#">
          <span class="icon-instagram"></span>
        </a>
        <a  href="#">
          <span class=" icon-twitter"></span>
        </a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
