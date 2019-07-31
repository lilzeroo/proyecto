<?php

require_once("funciones.php");

$usuarioLogueado = traerUsuarioLogueado();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/productos.css">
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
                <a class="nav-item nav-link s1" href="perfil.php">MI PERFIL
                <a class="nav-item nav-link s2" href="cerrar_sesion.php">SALIR</a>
              <?php else: ?>
              <a class="nav-item nav-link s1" href="login.php">LOGIN</a>
              <a class="nav-item nav-link s2" href="registro.php">REGISTRO</a>
              <?php endif; ?>
              <a data-toggle="modal" data-target="#basicExampleModal" class="nav-item nav-link s2" href="carrito.php">
                <span class="icon-cart"></span>
              </a>
            </div>
          </div>
        </nav>
      </header>

      <!-- Modal -->
      <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <button onclick="window.location.href = 'carrito.php';" type="button" class="btn btn-primary">Ver carrito</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->

<main class="container">
<h2>NUESTROS PRODUCTOS</h2>
<div class="borde"></div>
  <div class="row">
    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2017 <br> <b>MALBEC</b></h5>
      <p><b>$980</b></p>
      <button class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod colorxs">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2014 <br> <b>CABERNET</b></h5>
      <p><b>$1100</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod clrtablet">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2015 <br> <b>MERLOT</b></h5>
      <p><b>$1250</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod colorxs clrtablet">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2015 <br> <b>CHIANTI</b></h5>
      <p><b>$2500</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <!-- ROMPE LA FILA: -->
    <!-- <div class="w-100"></div> -->

    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2016 <br> <b>MERLOT </b></h5>
      <p><b>$1100</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod colorxs">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2017 <br> <b>MALBEC</b></h5>
      <p><b>$1000</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>
    <div class="col-12 col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod clrtablet">
      <a  href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2018 <br> <b>BONARDA</b></h5>
      <p><b>$800</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <div class="col-12  col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod colorxs clrtablet">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2013 <br> <b>MALBEC</b></h5>
      <p><b>$1600</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>

    <div class="col-12  col-md-4 col-sm-6 col-lg-3 ml-auto mr-auto prod d-none d-md-block d-lg-none">
      <a href="detalle.php"><img src="images/botella.png" alt="Botella" width="60"></a>
      <h5>2015 <br> <b>MALBEC</b></h5>
      <p><b>$1100</b></p>
      <button  class="btn btn-negro" type="button" name="button">COMPRAR</button>
    </div>
  </div>
</main>

    <footer>
        <div class="footer row justify-content-center">
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
