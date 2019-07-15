<?php

require_once("funciones.php");

$usuarioLogueado = traerUsuarioLogueado();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Carrito de compra</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/carrito.css">
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
          <?php if ($usuarioLogueado != null) : ?>
            <a class="nav-item nav-link s1" href="perfil.php"> MI CUENTA
          <?php else: ?>
          <a class="nav-item nav-link s1" href="login.php">LOGIN</a>
          <a class="nav-item nav-link s2" href="registro.php">REGISTRO</a>
          <?php endif; ?>
          <a data-toggle="modal" data-target="#basicExampleModal" class="nav-item nav-link s2" href="carrito.html">
            <span class="icon-cart"></span>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Carrito de compras</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button onclick="window.location.href = 'carrito.html';" type="button" class="btn btn-primary">Ver carrito</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <main >
    <h1>Carrito de compra</h1>
    <section class="detalles">
      <p class="nombreVino">NOMBRE</p>
      <p class="nombrePrecio">PRECIO</p>
    </section>
    <div class=" prueba col-12 col-md-3 ml-auto mr-auto prod">
      <a href="#">
        <img src="images/botella.png" alt="Botella" width="60">
      </a>
      <p class="titulo"><b>2017</b> MALBEC</p>
      <p class="precio"> <b>$980</b> </p>
    </div>
    <div class=" prueba col-12 col-md-3 ml-auto mr-auto prod">
      <a href="#">
        <img src="images/botella.png" alt="Botella" width="60">
      </a>
      <p class="titulo"><b>2014</b> CABERNET</p>
      <p class="precio"> <b>$1.100</b> </p>
    </div>
    <div class=" prueba col-12 col-md-3 ml-auto mr-auto prod">
      <a href="#">
        <img src="images/botella.png" alt="Botella" width="60">
      </a>
      <p class="titulo"><b>2015</b> MERLOT</p>
      <p class="precio"> <b>$1.250</b> </p>
    </div>
    <div class=" prueba col-12 col-md-3 ml-auto mr-auto prod">
      <a href="#">
        <img src="images/botella.png" alt="Botella" width="60">
      </a>
      <p class="titulo"><b>2017</b> PINOT NOIR</p>
      <p class="precio"> <b>$1.000</b> </p>
    </div>
    <p class="detalles2">Total: <b>$4.330</b></p>
    <button class="btn btn-negro" type="button" name="button">COMPRAR</button>
    <button onclick="window.location.href = 'productos.html';" class="seguirComprando btn btn-negro" type="button" name="button">SEGUIR COMPRANDO</button>
    <p class="importante">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
