<?php
require_once("funciones.php");
require_once("encrip.php");

if($_POST){
   $errores = validar($_POST,$_FILES);
   if(count($errores)==0){
    $user = buscarPorEmail($_POST["email"]);
    if($user !== null){
      $errores["email"]="Usuario ya registrado";
    }else{
      $avatar = armarAvatar($_FILES);
      $registro = armarRegistro($_POST,$avatar);
      guardarRegistro($registro);

      //De no existir errores en la información tipeada por el usuario entonces lo redirecciono a donde yo desee.


        }
      }
    }



/*$users = obtenerUsuarios();

  if($_POST){
    $user = crearUsuario();
    $id = count($users) + 1;
    $user["id"] = $id;
    $user["uploadAvatar"] = "pictures/$id.jpg";
    $users[] = $user;
    $json = json_encode($users);
    file_put_contents("users.json", $json);
    $avatar = $_FILES["avatar"];
    move_uploaded_file($file["tmp_name"], "pictures/$id.jpg");
  }
  */
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="shortcut icon" href= "../img/img1.png" class="next-head">
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">

  <title>JCJ | Crear cuenta</title>
  </head>

  <body id="formsbody">
    <header>

    </header>


    <div class="main-content">
      <div class="container">
        <div id="row">
          <div class="col-6">

    <!--INTRO-->
          <div class="title-des">
            <h1 id="main-title">Creá tu cuenta</h1>
            <h2 id="description-title">Completa tus datos a continuación para poder crear tu cuenta:</h2>
          </div>


          <?php if(isset($errores)):?>
             <ul class="alert alert-danger">
               <?php foreach ($errores as $value) :?>
                   <li><?=$value;?></li>
               <?php endforeach;?>
             </ul>
           <?php endif;?>



    <!--BUTTONS-->
          <div id="social-button">
            <button type="button" id="main-button-google" name="login-google"><a href="form_registro.php">Ingresar con Google</a></button>

            <button type="button" class="main-button-black facebook">Ingresar con Facebook</button>
          </div>

    <!--FORM-->
          <div class="main-form">
            <form action="form_registro.php" method="post" enctype="multipart/form-data">
              <input type='hidden' name='submitted' id='submitted' value='1'/>

              <div class="form-group">
                <label for="name">Nombre</label>
                <input required type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Nombre"  >
              </div>

              <div class="form-group">
                <label for="lastname">Apellido</label>
                <input required type="lastname" class="form-control" name="lastname" id="lastname" aria-describedby="lastnameHelp" placeholder="Apellido" >
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control" name="email" id="mail" aria-describedby="emailHelp" placeholder="tumail@mail.com" >
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" name="password" class="form-control" id="password">
              </div>

              <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input required type="telephone" class="form-control" name="telephone" id="telephone" aria-describedby="telephoneHelp" placeholder="" >
                <small id="telephoneHelp" class="form-text text-muted">Sin 0 y sin 15 para celulares</small>
              </div>

              <div class="form-group">
                <label for="inputCity">Ciudad</label>
                <select name="inputCity" id="inputCity" class="form-control">
                  <option selected>Seleccioná una opción</option>
                  <option value="Buenos Aires">Bs. As.</option>
                  <option value="Catamarca">Catamarca</option>
                  <option value="Chaco">Chaco</option>
                  <option value="Chubut">Chubut</option>
                  <option value="Cordoba">Cordoba</option>
                  <option value="Corrientes">Corrientes</option>
                  <option value="Entre Rios">Entre Rios</option>
                  <option value="Formosa">Formosa</option>
                  <option value="Jujuy">Jujuy</option>
                  <option value="La Pampa">La Pampa</option>
                  <option value="La Rioja">La Rioja</option>
                  <option value="Mendoza">Mendoza</option>
                  <option value="Misiones">Misiones</option>
                  <option value="Neuquen">Neuquen</option>
                  <option value="Rio Negro">Rio Negro</option>
                  <option value="Salta">Salta</option>
                  <option value="San Juan">San Juan</option>
                  <option value="San Luis">San Luis</option>
                  <option value="Santa Cruz">Santa Cruz</option>
                  <option value="Santa Fe">Santa Fe</option>
                  <option value="Sgo. del Estero">Sgo. del Estero</option>
                  <option value="Tierra del Fuego">Tierra del Fuego</option>
                 <option value="Tucuman">Tucuman</option>
                </select>
              </div>

              <div class="form-group">
                <label for="avatar">Foto de perfil</label>
                <input required type="file" class="form-control-file" name="avatar" id="avatar" >
                <small id="uploadAvatar" class="form-text text-muted">No debe pesar más de 20mb, en formato .jpg o .png <br></small>
              </div>

              <div id="create">
                <input type="submit" name="main-button" id="main-button" class="button-black" value="Crear cuenta">
              </div>

            </form>
          </div>


        <!--LOGIN EXISTING ACCOUNT-->
          <p id="current-id">¿Ya tenés cuenta?</p>
            <button type="button" class="btn btn-main-azul">Iniciá sesión</button>
            </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .main-content -->

  <!--FOOTER -->
  <footer>

  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/addc1ca592.js"></script>
  </body>
</html>
