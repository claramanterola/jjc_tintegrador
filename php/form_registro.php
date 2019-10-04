<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href= "img/img1.png" class="next-head">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">

    <title>JCJ | Crear cuenta</title>
  </head>
  <body id="formsbody">

    <header>
      <?php
      include_once "../header.html";
      ?>
    </header>

    <container class="main-content">
      <div id="row">
        <div class="col-lg4 col-12">
      <div class="container">
    <!--INTRO-->
          <div class="title-des">
            <h1 id="main-title">Creá tu cuenta</h1>
            <h2 id="description-title">Completa tus datos a continuación para poder crear tu cuenta:</h2>
          </div>

    <!--BUTTONS-->
          <div id="social-button">
            <button type="button" class="btn google">Ingresar con Google</button>
            <button type="button" class="btn-main-azul">Ingresar con Facebook</button>
          </div>

    <!--FORM-->
          <div class="main-form">
            <form action="registerValidation.php" method="POST">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Martín">
              </div>

              <div class="form-group">
                <label for="lastname">Apellido</label>
                <input type="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Del Potro">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="jmdelpotro@mail.com">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
              </div>

              <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input type="telephone" class="form-control" id="telephone" aria-describedby="telephoneHelp" placeholder="1166543322">
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
                <input type="submit" id="main-button-black" value="Crear cuenta">
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
