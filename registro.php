<?php

require_once("funciones.php");


$nombreDefault = "";
$apellidoDefault = "";
$emailDefault = "";
$fechaDefault = "";


if (estaLogueado()) {
  header("location:home.php");exit;
}

$usuarioLogueado = traerUsuarioLogueado();

if ($_POST) {
    $errores = validarRegistracion($_POST);


     if (empty($errores)) {

       $usuario = armarUsuario($_POST);

       guardarUsuario($usuario);

       header("location:login.php");exit;
     }


     }






 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="fonts/iconos.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Noto+Serif&display=swap" rel="stylesheet">
  <!-- font-family: 'Alegreya Sans', sans-serif;
    font-family: 'Noto Serif', serif; -->
</head>

<body >

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

  <main class="container-fluid">
    <h1>Registrate</h1>

    <p><?php  if ($_POST) {
        $errores = validarRegistracion($_POST);
    foreach ($errores as $error) {
           echo $error . "<br>";}
           $nombreDefault = $_POST["nombre"];
           $apellidoDefault = $_POST["apellido"];
           $emailDefault = $_POST["email"];
           $nacimientoDefault = $_POST["nacimiento"];
         } ?></p>

    <form action="registro.php" method="post">

      <div class="form-row justify-content-center justify-content-md-start">
        <div class="form-group col-md-3 offset-md-2 col-9">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre" value="<?=$nombreDefault?>" required>
        </div>

        <div class="form-group col-md-3 offset-md-2 col-9">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba su apellido" value="<?=$apellidoDefault?>" required >
        </div>
        <div class="form-group col-md-3 offset-md-2 col-9">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@milawine.com" value="<?=$emailDefault?>" required >
        </div>
        <div class="form-group col-md-3 offset-md-2 col-9 ">
          <label for="nacimiento">Fecha de nacimiento:</label>
          <input type="date" class="form-control" id="nacimiento"name="nacimiento" min="1930-01-01" max="2001-7-12"  value="<?=$nacimientoDefault?>" required >
        </div>
        <div class="form-group col-md-3 offset-md-2  col-9">
          <label for="pass">Contraseña:</label>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Escriba por favor su contraseña" required >
        </div>
        <div class="form-group col-md-3 offset-md-2 col-9 ">
          <label class="col-12 ve" for="verpass">Verificar contraseña:</label>
          <input type="password" class="form-control" id="verpass" name="verpass" placeholder="Confirmar por favor contraseña" required >
        </div>
        <button  class="btn btn-mio form-group col-6 col-sm-5 col-md-2 offset-md-5 " type="submit"  >Registrarme</button>
      </div>

    </form>
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
