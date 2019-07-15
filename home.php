<?php

require_once("funciones.php");

$usuarioLogueado = traerUsuarioLogueado();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
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
          <a class="nav-item nav-link" href="#faqs">FAQ</a>
          <a class="nav-item nav-link" href="#elcontacto">CONTACTO</a>
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
          <button onclick="window.location.href = 'carrito.php';" type="button" class="btn btn-primary">Ver carrito</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <section class="fotos">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/home1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/home2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/home3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section>
    <article class="articuloVino">
      <h2>Vinos de alta calidad</h2>
      <div class="borde"></div>
      <p class="subtitulo">El continuo esfuerzo por progresar, el equipo de trabajo, la innovación, la inversión en tecnología y la constante búsqueda por alcanzar la máxima expresión de los vinos que identifican las virtudes de nuestro terroir, han
        logrado que Mila Wine sea reconocida por brindar al mercado vinos de excelente calidad, personalidad, carácter y estilo propio.</p>
    </article>

  </section>


  <section id="faqs">
    <div class="faq">
      <h2>F.A.Q Preguntas frecuentes</h2>
      <div class="borde2"></div>
      <p class="subtitulo">¿Lorem ipsum dolor sit amet?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
      <p class="subtitulo">¿Lorem sit amet?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <p class="subtitulo">¿Lorem ipsum dolor?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p class="subtitulo">¿Lorem ipsum dolor sit amet ipsum dolor?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <p class="subtitulo">¿Lorem ipsum dolor sit amet?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <p class="subtitulo">¿Lorem ipsum dolor ipsum dolor sit amet?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <p class="subtitulo">¿Lorem ipsum dolor sit amet?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    </div>
  </section>

  <section id="elcontacto" class="contacto">
    <div class="contacto">
      <h2>Formulario de Contacto</h2>
      <form action="home.html" method="post">
        <fieldset>
          <legend>Complete los campos para enviar el formulario</legend>
          <div class="centrar">
          <label for="lbl_nombre" name="lbl_nombre">Su Nombre:</label>
          <input type="text" name="nombre" placeholder=" Ingrese su nombre" required>
          <label for="lbl_apellido" name="lbl_apellido">Su Apellido:</label>
          <input type="text" name="apellido" placeholder=" Ingrese su apellido" required>
          <label for="lbl_correo" name="lbl_correo">Su Email:</label>
          <input type="email" name="correo" placeholder=" Ingrese su email" required>
          <label for="lbl_telefono" name="lbl_telefono">Su Teléfono:</label>
          <input type="tel" name="telefono" placeholder=" Ingrese su teléfono" required>
          <label for="lbl_mensaje" name="lbl_mensaje">Su Mensaje:</label>
          <textarea name="mensaje" id="mensaje" cols="30" rows="4" maxlength="251" placeholder=" Ingrese su mensaje" required></textarea>
        </div>
          <button onclick="window.location.href = '#';" class="btn btn-mio form-group col-10 col-md-4 " type="submit" name="entrar">Enviar</button>
        </fieldset>
      </form>
      <h2>Estamos aquí</h2>
      <div class="mapa">
        <div class="row-fluid">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13395.577879564948!2d-68.80714714710209!3d-32.927386301698064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1560813903249!5m2!1ses!2sar" width="600"
            height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row">
        <div class=" espacio  col-12  col-md-4 col-lg-4 col-xl-4 "><strong>MAXIM BUBNOV</strong> <br> <span style="color:white">Email: mb@milawine.com <br> Tel: 261 000 5555</span></div>
        <div class="espacio ml-auto mr-auto   col-12  col-md-4 col-lg-4 col-xl-4"><strong>FLAVIO DILELLO</strong> <br> <span style="color:white">Email: fd@milawine.com <br> Tel: 261 508 4783</span></div>
        <div class="espacio ml-auto mr-auto  col-12  col-md-4 col-lg-4 col-xl-4"><strong>LAUTARO ALONSO</strong> <br> <span style="color:white">Email: la@milawine.com <br> Tel: 261 000 6666</span></div>
      </div>
    </div>
  </section>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
