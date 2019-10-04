<!--
<?php
  $USUARIOS_FILENAME = "user.json";
  if ($_POST){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $user = [
      "email" => $email,
      "pass" => $hash,
    ];

    $file = file_get_contents($USUARIOS_FILENAME);
    $users = json_decode($file);
    $users[] = $user;
    $json = json_encode ($users);
    file_put_contents($USUARIOS_FILENAME, $json);
  }
var_dump($users);
?>
-->


<?php
  if ($_POST){
    function crearUsuario() {
      $user = [
        $name => $_POST["name"],
        $lastname => $_POST["lastname"],
        $email => $_POST["email"],
        $pass = $_POST["password"];
        $hash = password_hash($pass, PASSWORD_DEFAULT);
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
    }

    function obtenerUsuarios() {
    $json = file_get_contents("users.json");
    $users = json_decode($json, true);
    return $users;
    }


    return null;
  }
  
?>
