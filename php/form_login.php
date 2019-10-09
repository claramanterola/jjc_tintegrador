<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
  
  if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      
      if($usuario==null){
        $errores['email']="Usuario no encontrado...";
      } else {

        //Desde aquí incio mi revisión a ver que ocurre con los contenidos de las variables y tratar de ver que ocurre
        //Aquí ví que el dato viene bien, es decir el password hasheado
        //dd($usuario['password']);
        //Ahora veo que trae esta variable  y noto que trae el dato correctamente
        //dd($_POST['password']);
        //Aquí estaba el error a la función password_verify, se le debe psar primero el dato no hasheado y luego el hasheado, ese fue mi error, lo habia pasado al contrario

        if(password_verify($_POST['password'],$usuario['password'])===false) {
          $errores['password']="Datos inválidos...";
        } else {
          seteoUsuario($usuario,$_POST);

          if(validarUsuario()){
            header('location:perfil.php');
            exit;

      		} else {
      			header('location:login.php');
      			exit;
            	}
          }
	     }
    }
  }
?>




<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD

=======
>>>>>>> 944daecd3aa0970f96ed96d8cf9cb979187dbe7d
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../styles/stylesClara.css">
  <link rel="shortcut icon" href= "../img/__logo/flavicon.ico" class="next-head">
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  <title>JCJ | Ingresá a tu cuenta</title>
</head>

<<<<<<< HEAD
<body id="formsbody">
	
	<header>
    <?php
    include_once "../header.php";
    ?>
  </header>
=======
<<<<<<< HEAD
    <title>JCJ | Iniciar sesion</title>

=======
    <title>Iniciá sesión</title>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesClara.css">
    <link rel="shortcut icon" href= "img/img1.png" class="next-head">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">

    <title>JCJ | Iniciar sesion</title>
>>>>>>> 0ef5f45791cddbe3541cf6cc257997e8831b30f6
  </head>
  <body id="formsbody">

    <header>
      <?php
      include_once "../header.html";
      ?>
    </header>
>>>>>>> 944daecd3aa0970f96ed96d8cf9cb979187dbe7d

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
         <form action="loginValidation.php" method="POST">
            <div class="form-group">
              <label for="email">Usuario/email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="jmdelpotro@mail.com" required>
            </div>
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 0ef5f45791cddbe3541cf6cc257997e8831b30f6
>>>>>>> 944daecd3aa0970f96ed96d8cf9cb979187dbe7d
        <!--Password-->
          <div class="pass-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required> 
            <small id="passHelp" class="form-text text-muted">Debe contener al menos 6 caracteres</small>
          
          <!--
          BOTON ANTERIOR
            <label class="form-check-label" for="text"> <a href="#">Olvidé mi contraseña</a></label>
          -->

            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#forgotModal">Olvidé mi contraseña
            </button>
          </div>

          <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModal" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="forgotPasswordModal">Olvidé mi contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="email">Ingresá tu email:</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="jmdelpotro@mail.com" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
                <button type="button" id="main-button-black"> <a href="../indexClara.html">Recuperar</a></button>
              </div>
            </div>
          </div>
        </div>

          <!--Recordar usuario-->
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember-user">
            <label class="form-check-label" for="remember-user" name="remember-user">Recordar mi usuario</label>
          </div>
        </div>
<<<<<<< HEAD
        <div id="create">
          <button type="button" id="main-button-black"> <a href="form_login.php">Ingresar</a></button>


<<<<<<< HEAD
	        <div id="create">
	        	<button type="submit" id="main-button-black" name="submit">Ingresar</button>
	        </div>
       	</form>
=======
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

=======

>>>>>>> 0ef5f45791cddbe3541cf6cc257997e8831b30f6
            <div id="create">
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
          </form>
<<<<<<< HEAD
        </div>
=======
>>>>>>> 0ef5f45791cddbe3541cf6cc257997e8831b30f6
>>>>>>> 944daecd3aa0970f96ed96d8cf9cb979187dbe7d

        <div class="new-user">
          <p id="current-id">¿Aún no tenés cuenta?</p>
          <button type="button" id="main-button-black" name="new-user" background-color="#D4DC00"><a href="form_registro.php">Creá tu usuario</a></button>
        </div>
      </div>
    </container>
    <!--A C Á   T E R M I N A   E L   F O R M U L A R I O-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/addc1ca592.js"></script>
    </body>

  <!--FOOTER 
  <footer>
    <?php
    include_once "../footer.php";
    ?>
  </footer>
  -->
</html>
