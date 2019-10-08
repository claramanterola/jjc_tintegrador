<?php

  function encriptarPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }


function crearUsuario() {
    $user = [
      "name" => $_POST["name"],
      "username" => $_POST["username"],
      "email" => $_POST["email"],
      "telefono" => $_POST["telephone"],
      "password" => encriptarPassword($_POST["password"]);
      "telefono" => $_POST["telephone"],
      "ciudad" => $_POST["inputCity"];
    return $user;
  }
?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <div class="main-form">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input required type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Martín">
        </div>

        <div class="form-group">
          <label for="lastname">Apellido</label>
          <input required type="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Del Potro">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input required type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="jmdelpotro@mail.com">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input required type="password" class="form-control" id="password">
        </div>

        <div class="form-group">
          <label for="telephone">Teléfono</label>
          <input required type="telephone" class="form-control" id="telephone" aria-describedby="telephoneHelp" placeholder="1166543322">
          <small id="telephoneHelp" class="form-text text-muted">Sin 0 y sin 15 para celulares</small>
        </div>

        <div class="form-group">
          <label for="inputCity">Ciudad</label>
          <select id="inputCity" class="form-control">
            <option selected>Seleccioná una opción</option>
            <option>Capital Federal</option>
            <option>Córdoba</option>
            <option>GBA Gran Buenos Aires</option>
            <option>Santa Fe</option>
          </select>
        </div>

        <div id="create">
          <input  type="submit" id="main-button-black" value="Crear cuenta">
        </div>

      </form>
    </div>


  <!--LOGIN EXISTING ACCOUNT-->
    <p id="current-id">¿Ya tenés cuenta?</p>
      <button type="button" class="btn btn-main-azul">Iniciá sesión</button>

  <!--ESTE DIV CIERRA EL CONTAINER-FLUID-->
    </div>
  </content>
  </div>
  </div>


  </div>
  </div>


  </body>
  </html>
  <!--FOOTER -->
