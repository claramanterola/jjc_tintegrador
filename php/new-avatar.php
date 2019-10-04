<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="shortcut icon" href= "../img/img1.png" class="next-head">
    <title>JCJ | Mi perfil</title>
  </head>
  <body id="formsbody">

    <header>
      <?php
      include_once "../header.html";
      ?>
    </header>
    
    <main>

      <section class="main-content mx-5 justify-content-center">
        <div id="row">


          <div class="col-sm-6">

            <div class="title-des">
              <h1 id="main-title">Mi perfil</h1>
            </div>


            <div class="main-form">
              <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Martín">
                </div>

                <div class="form-group">
                  <label for="lastname">Apellido</label>
                  <input type="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Del Potro">
                </div>

                <div class="form-group">
                  <fieldset disabled>
                    <label for="mailDisabled">Email</label>
                    <input type="text" id="mailDisabled" class="form-control" placeholder="jmdelpotro@gmail.com">
                  </fieldset>
                </div>

                <div class="avatar">
                  <label for="uploadAvatar">Foto de perfil</label>
                  <input type="file" class="form-control-file" id="uploadAvatar">
                  <small id="uploadAvatar" class="form-text text-muted">No debe pesar más de 20mb, en formato .jpg, .jpeg, .png <br></small>
                </div>

                <div id="create">
                  <button type="button" class="btn btn-dark create">GUARDAR CAMBIOS</button>
                  <button type="button" class="btn btn-outline-danger">Eliminar cuenta</button>
                </div>

            </form>
          </section>

</main>

<footer>
  <?php
  include("../footer.html");
  ?>
</footer>

  </body>
</html>
