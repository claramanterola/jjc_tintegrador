<?php
  if($_POST){
    echo "se hizo un Post";

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
<head>
  <?php
    include ("link.php");
  ?>
  <title>JCJ | Iniciar sesion</title> 
</head>

<body id="formsbody">
  <header>
    <?php
    include_once "../header.php";
    ?>
  </header>

    <div class="main-content">
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
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="email">Usuario</label>
              <input type="email" class="form-control" name="name" id="mail" aria-describedby="emailHelp" placeholder="jmdelpotro@mail.com">
            </div>

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

        <div id="create">
          <button type="submit" id="main-button-black" name="submit">Ingresar</button>
        </div>
      </form>
</div>


    <!--FOOTER -->
    <?php
      include ("footer.php");
    ?>

    <?php
      include ("link2.php");
    ?>

</body>
</html>