<?php

session_start();

function validarRegistracion($datos) {
  $errores = [];

  if (strlen($_POST["nombre"]) < 3) {
    $errores["nombre"] = "El nombre debe tener al menos 3 caracteres";
  }
  if (strlen($_POST["apellido"]) < 3) {
    $errores["apellido"] = "El apellido debe tener al menos 3 caracteres";
  }
  if ($datos["email"] == "") {
    $errores["email"] = "Tenes que indicar tu email";
  }
  else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores["email"] = "El mail no es valido";
  }
  else if (existeElEmail($datos["email"])) {
    $errores["email"] = "Ese email ya esta registrado";
  }
  if ($datos["nacimiento"] == "") {
    $errores["nacimiento"] = "Tenes que indicar tu fecha de nacimiento";
  }
  else if (validateAge($datos["nacimiento"]) == false) {
    $errores["nacimiento"] = "Tenes que ser mayor de edad";
  }
  if ($datos["pass"] == "") {
    $errores["pass"] = "Tenes que colocar una contraseña";
  }

  if (strlen($_POST["pass"]) < 8) {
    $errores["pass"] = "La contraseña debe tener al menos 8 caracteres";
  }

  if ($datos["verpass"] == "") {
    $errores["verpass"] = "Tenes que verificar la contraseña";
  }

  if ($datos["pass"] != "" && $datos["verpass"] != "" && $datos["pass"] != $datos["verpass"]) {
    $errores["pass"] = "Las contraseñas no coinciden";
  }

return $errores;
}

function buscarUsuarioPorId($id) {
  $usuarios = traerTodosLosUsuarios();

  foreach ($usuarios as $usuario) {
    if ($usuario["id"] == $id) {
      return $usuario;
    }
  }
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

function validateAge($birthday, $age = 18)
{
    // $birthday can be UNIX_TIMESTAMP or just a string-date.
    if(is_string($birthday)) {
        $birthday = strtotime($birthday);
    }

    // check
    // 31536000 is the number of seconds in a 365 days year.
    if(time() - $birthday < $age * 31536000)  {
        return false;
    }

    return true;
}

?>
