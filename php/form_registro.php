<?php
require("funciones.php");
require("encrip.php");


  $users = obtenerUsuarios();

  if($_POST){
    $user = crearUsuario();
    $id = count($users) + 1;
    $user["id"] = $id;
    $user["profilePicture"] = "pictures/$id.jpg";
    $users[] = $user;
    $json = json_encode($users);
    file_put_contents("users.json", $json);
    $file = $_FILES["uploadAvatar"];
    move_uploaded_file($file["tmp_name"], "pictures/$id.jpg");
  }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<<<<<<< HEAD
  <?php
    include ("link.php");
  ?>
=======
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD

<<<<<<< HEAD
=======
  <link rel="stylesheet" href="../styles/stylesClara.css">
  <link rel="shortcut icon" href= "../img/__logo/flavicon.ico" class="next-head">

=======
>>>>>>> 4aa5df1e484902fc9b2200c5107edd78ccc44942
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="shortcut icon" href= "../img/img1.png" class="next-head">
>>>>>>> 944daecd3aa0970f96ed96d8cf9cb979187dbe7d
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">

>>>>>>> 17663a54b76fb025665374ab541f9a37f334a8bc
  <title>JCJ | Crear cuenta</title>
</head>

  <body id="formsbody">
<<<<<<< HEAD
=======
    <header>

    </header>

    <header>
>>>>>>> 17663a54b76fb025665374ab541f9a37f334a8bc
      <?php
      include ("navbar.php");
      ?>

    <div class="main-content">
      <div class="container">
        <div id="row">
          <div class="col-6">

    <!--INTRO-->
          <div class="title-des">
            <h1 id="main-title">Creá tu cuenta</h1>
            <h2 id="description-title">Completa tus datos a continuación para poder crear tu cuenta:</h2>
          </div>

    <!--BUTTONS-->
          <div id="social-button">
            <button type="button" id="main-button-black" name="login-google"><a href="form_registro.php">Ingresar con Google</a></button>
            <button type="button" id="main-button-black">Ingresar con Facebook</button>
          </div>

    <!--FORM-->
          <div class="main-form">
            <form action="" method="post" enctype="multipart/form-data">
              <input type='hidden' name='submitted' id='submitted' value='1'/>

              <div class="form-group">
                <label for="name">Nombre</label>
                <input required type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Nombre">
              </div>

              <div class="form-group">
                <label for="lastname">Apellido</label>
                <input required type="lastname" class="form-control" name="lastname" id="lastname" aria-describedby="lastnameHelp" placeholder="Apellido">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control" name="email" id="mail" aria-describedby="emailHelp" placeholder="tumail@mail.com">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" name="password" class="form-control" id="password">
              </div>

              <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input required type="telephone" class="form-control" name="telephone" id="telephone" aria-describedby="telephoneHelp" placeholder="">
                <small id="telephoneHelp" class="form-text text-muted">Sin 0 y sin 15 para celulares</small>
              </div>

              <div class="form-group">
                <label for="inputCity">Ciudad</label>
                <select name="inputCity" id="inputCity" class="form-control">
                  <option selected>Seleccioná una opción</option>
                  <option>Capital Federal</option>
                  <option>Córdoba</option>
                  <option>GBA Gran Buenos Aires</option>
                  <option>Santa Fe</option>
                </select>
              </div>

              <div class="form-group">
                <label for="uploadAvatar">Foto de perfil</label>
                <input required type="file" class="form-control-file" name="uploadAvatar" id="uploadAvatar">
                <small id="uploadAvatar" class="form-text text-muted">No debe pesar más de 20mb, en formato .jpg, .jpeg, .png <br></small>
              </div>

              <div id="create">
                <input type="submit" name="main-button" id="main-button-black" class="button-black" value="Crear cuenta">
              </div>

            </form>
          </div>


        <!--LOGIN EXISTING ACCOUNT-->
          <p id="current-id">¿Ya tenés cuenta?</p>
<<<<<<< HEAD
            <button type="button" id="main-button-black">Iniciá sesión</button>
=======
            <button type="button" class="btn btn-main-azul">Iniciá sesión</button>
>>>>>>> 17663a54b76fb025665374ab541f9a37f334a8bc
            </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .main-content -->
<<<<<<< HEAD
=======
    <footer>
>>>>>>> 17663a54b76fb025665374ab541f9a37f334a8bc

<<<<<<< HEAD
    </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/addc1ca592.js"></script>
=======
  <!--FOOTER -->
    <?php
    include ("footer.php");
    ?>

  <?php
    include ("link2.php");
  ?>

>>>>>>> 4aa5df1e484902fc9b2200c5107edd78ccc44942
  </body>
</html>
