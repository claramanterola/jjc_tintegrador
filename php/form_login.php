<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesClara.css">
    <link rel="shortcut icon" href= "img/img1.png" class="next-head">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    
    <title>JCJ | Iniciar sesion</title>
  </head>
  <body id="formsbody">

    <header>
      <?php
      include_once "../header.html";
      ?>
    </header>

    <container class="main-content">
      <div id="row">
        <div class="col-lg6 col-12">

        <!--TITULO, DESCRIPCION Y FORMULARIO-->
        <div class="title-des">
          <h1 id="main-title_form">Ingresá a tu cuenta</h1>
          <h2 id="description-title">Completa tus datos a continuación para poder ingresar a tu cuenta:<br></h2>
        </div>

        <!--FORM-->
        <!--Usuario-->
        <div class="main-form">
          <form action="/loginValidation.php" method="POST">
            <div class="form-group">
              <label for="email">Usuario</label>
              <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="jmdelpotro@mail.com">
            </div>

            <!--Password-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
              <label class="form-check-label" for="text"> <a href="#">Olvidé mi contraseña</a></label>
            </div>

            <!--Recordar usuario-->
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recordar mi usuario</label>
            </div>
        
            <div id="create">
              <input type="submit" id="main-button-black" value="Ingresar">
            </div>
          </form>
        </div>

        <div class="new-user">
          <p id="current-id">¿Aún no tenés cuenta?</p>
          <button type="button" id="main-button-black"> <a href="form_registro.html">Creá tu usuario</a></button>
        </div>

    </div>
    </container>
    <!--A C Á   T E R M I N A   E L   F O R M U L A R I O-->

  </body>
</html>
