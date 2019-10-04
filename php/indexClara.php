<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/stylesClara.css">
    <link rel="shortcut icon" href= "../img/__logo/flavicon.ico" class="next-head">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">


    <title>JCJ | Tienda de tenis premium</title>
  </head>
  <body id="principal">

<header>
  <?php
  include_once "../header.html";
  ?>
</header>


<!-- Imagen Intro -->

<div class="hero-image">
  <div class="hero-text">
    <h1>¿Listo para jugar?</h1>
    <p>JCJ es la mejor tienda de tenis de Argentina. <br>Elegí el producto que estas buscando al mejor precio y te lo enviamos a tu casa.</p>
    <button type="button" id="main-button"> <a href="#categories">Conoce mas</a></button>
  </div>
</div>



<!-- Cards -->

<section id="allCategories" class="py-12 my-12">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-12 text-md-left my-12">
        <h1 id="categories">Categorías</h1>
      </div>


      <div class="col-12 col-md-4 text-center">
        <div class="product-card">
          <div class="card-body">
            <img src="../img/__categories/cat-raquetas.png" alt="raquetas de tenis">
            <h5 class="card-title">Raquetas</h5>
            <a href="raquetas.php" id="main-button">Ver Más</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-4 text-center">
        <div class="product-card">
          <div class="card-body">
            <img src="../img/__categories/cat-pelotas.png" alt="pelotas de tenis">
            <h5 class="card-title">Pelotas</h5>
            <a href="raquetas.php" id="main-button">Ver Más</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-4 text-center">
        <div class="product-card">
          <div class="card-body">
            <img src="../img/__categories/cat-cuerdas.png" alt="cuerdas de raquetas tenis">
            <h5 class="card-title">Cuerdas</h5>
            <a href="raquetas.php" id="main-button">Ver Más</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 text-center">
        <div class="product-card">
          <div class="card-body">
            <img src="../img/__categories/cat-bolsos.png" alt="bolsos de tenis">
            <h5 class="card-title">Bolsos</h5>
            <a href="raquetas.php" id="main-button">Ver Más</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-4 text-center">
        <div class="product-card">
          <div class="card-body">
            <img src="../img/__categories/cat-accesorios.png" alt="accesorios">
            <h5 class="card-title">Accesorios</h5>
            <a href="raquetas.php" id="main-button">Ver Más</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-4 text-center">
        <div class="product-card">
          <div class="card-body">
            <img src="../img/__categories/cat-descuentos.png" alt="descuentos y promociones">
            <h5 class="card-title">Promociones</h5>
            <a href="raquetas.php" id="main-button">Ver Más</a>
          </div>
        </div>
      </div>
  </section>


  <!--FOOTER -->

  <footer>
    <?php
    include_once "../footer.html";
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
