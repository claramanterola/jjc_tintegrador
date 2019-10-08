<?php
//empiezojuan

//funcion paraencriptar password

  function encriptarPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }

//funcion para guardar en el usuario todos los datos
    function obtenerUsuarios() {
      $json = file_get_contents("users.json");
      $users = json_decode($json, true);
      return $users;
    }

    function crearUsuario() {
      $user = [
        "name" => $_POST["name"],
        "lastname" => $_POST["lastname"],
        "email" => $_POST["email"],
        "password" => encriptarPassword($_POST["password"])
      ];
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

    $users = obtenerUsuarios();

    if ($_POST) {
      $user = crearUsuario();
      $id = count($users) + 1;
      $user["id"] = $id;
      $users[] = $user;
      $json = json_encode($users);
      file_put_contents("users.json", $json);
    }
  ?>
