<?php

require_once("funciones.php");

$usuarios = traerTodosLosUsuarios();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado Usuarios</title>
    <link rel="stylesheet" href="css/listadoUsu.css">
  </head>
  <body>
  <h2 class="title">Listado de usuarios:</h2>
      <ul class="title">
          <?php foreach($usuarios as $usuario) : ?>
          <li>
            <a href="detalleUsuarios.php?idUsuario=<?=$usuario["id"]?>">
              <?=$usuario["id"]?>-
              <?=$usuario["nombre"]?>
              <?=$usuario["apellido"]?>
            </a>
          </li>
        <?php endforeach; ?>
    </ul>
  </body>
</html>
