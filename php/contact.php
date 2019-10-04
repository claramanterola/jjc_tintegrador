<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href= "../img/img1.png" class="next-head">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Contacto</title>
  </head>

  <body id="principal">

    <header>
      <?php
      include_once "../header.html";
      ?>
    </header>

    <main>
      <container class="main-content">
        <div id="row">

          <div class="col-lg6 col-12">
            <div class="title-des">
              <h1 id="main-title">Contactanos</h1>
            </div>

            <div class="main-form">
              <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Juan Martín">
                </div>

                <div class="form-group">
                  <label for="lastname">Email</label>
                  <input type="email" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="jmdelpotro@gmail.com">
                </div>

                <div class="form-group">
                  <label for="telephone">Teléfono (opcional)</label>
                  <input type="telephone" class="form-control" id="telephone" aria-describedby="telephoneHelp">
                  <small id="telephoneHelp" class="form-text text-muted">Sin 0 y sin 15 para celulares</small>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Mensaje (opcional)</label>
                  <textarea class="form-control" id="textMessage" rows="3" placeholder="Dejanos aquí tu mensaje o consulta"></textarea>
                </div>

                <div id="create">
                  <button type="button" class="btn btn-dark create">Enviar</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </container>
    </main>

  <footer>
    <?php
    include("../footer.html");
    ?>
  </footer>

  </body>
</html>
