<?php

require_once("funciones.php");

if (!isset($_GET["idUsuario"])) {
  header("location:listadoUsuarios.php");
}

$usuario = buscarUsuarioPorId($_GET["idUsuario"]);

if ($usuario == null) {
  header("location:listadoUsuarios.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalle Usuarios</title>
    <link rel="stylesheet" href="css/listadoUsu.css">
  </head>
  <body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                  <h3>Id: <?=$usuario["id"]?></h3>
                  <h3>Nombre: <?=$usuario["nombre"]?></h3>
                  <h3>Apellido: <?=$usuario["apellido"]?></h3>
                  <h3>Email: <?=$usuario["email"]?></h3>
                  <h3>Fecha de nacimiento: <?=$usuario["nacimiento"]?></h3>

                </div>
            </div>
        </div>
    </div>
  </body>
</html>
