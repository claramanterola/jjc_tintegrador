<?php
function obtenerUsuarios() {
  $json = file_get_contents("users.json");
  $users = json_decode($json,true);
  return $users;
}

function crearUsuario () {
  $user = [];
  $user["name"] = $_POST["name"];
  $user["apellido"] = $_POST["lastname"];
  $user["email"] = $_POST["email"];
  $user["telefono"] = $_POST["telephone"];
  $user["ciudad"] = $_POST["inputCity"];
  $password = encriptarPassword($_POST["password"]);
  return $user;
}

function obtenerUsuarioPorEmail($email) {
  $users = obtenerUsuarios();

  foreach ($users as $user) {
    if ($user["email"] == $email) {
      return $user;
    }
  }
  return null;
}
?>
