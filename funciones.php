<?php

session_start();

function validarRegistracion($datos) {
  return [];
}

function validarLogin($datos) {
  $errores = [];

  if (!existeElEmail($datos["email"])) {
    $errores["email"] = "Los datos son incorrectos";
  }
  else {
    $usuario = traerUsuarioPorEmail($datos["email"]);

    if (password_verify($datos["pass"], $usuario["pass"]) == false) {
      $errores["email"] = "Los datos son incorrectos, por contrasenia";
    }
  }

  return $errores;
}

function existeElEmail($email) {
  $usuario = traerUsuarioPorEmail($email);

  if ($usuario == null) {
    return false;
  } else {
    return true;
  }
}

function traerUsuarioPorEmail($email) {
  $usuarios = traerTodosLosUsuarios();

  foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }

  return null;
}

function loguear($email) {
  $_SESSION["usuarioLogueado"] = $email;
}

function armarUsuario($datos) {
  return [
    "id" => proximoId(),
    "nombre" => ucfirst($datos["nombre"]),
    "apellido" => $datos["apellido"],
    "email" => $datos["email"],
    "nacimiento" => $datos["nacimiento"],
    "pass" => password_hash($datos["pass"], PASSWORD_DEFAULT),
    "verpass" => password_hash($datos["verpass"], PASSWORD_DEFAULT)
  ];
}

function proximoId() {
  $usuarios = traerTodosLosUsuarios();

  if (count($usuarios) == 0) {
    return 1;
  }

  $ultimoUsuario = end($usuarios);

  return $ultimoUsuario["id"] + 1;
}

function traerTodosLosUsuarios() {
  $archivo = file_get_contents("usuarios.json");

  if ($archivo == "") {
    return [];
  }

  $usuarios = json_decode($archivo, true);

  return $usuarios;
}

function guardarUsuario($usuario) {
  $usuarios = traerTodosLosUsuarios();

  $usuarios[] = $usuario;

  $usuariosJSON = json_encode($usuarios);

  file_put_contents("usuarios.json", $usuariosJSON);
}

function estaLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return true;
  }
  else {
    return false;
  }
}

function traerUsuarioLogueado() {
  if (estaLogueado()) {
    return traerUsuarioPorEmail($_SESSION["usuarioLogueado"]);
  }

  return null;
}

?>
