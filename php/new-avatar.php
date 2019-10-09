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

    <title>JCJ | Mi perfil</title>

  </head>
  <body id="formsbody">

    <header>
      <?php
      include_once "../header.php";
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
<!--FOOTER -->

<footer>
  <?php
  include_once "../footer.php";
  ?>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/addc1ca592.js"></script>
</body>
</html>
