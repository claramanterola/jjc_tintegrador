<!doctype html>
<html lang="es">

<head>
  <?php
    include ("link.php");
  ?>
  <title>JCJ | Crear cuenta</title>
</head>

<body id="principal">
  <?php
    include ("navbar.php");
  ?>

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
              <a href="pelotas.php" id="main-button">Ver Más</a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-4 text-center">
          <div class="product-card">
            <div class="card-body">
              <img src="../img/__categories/cat-cuerdas.png" alt="cuerdas de raquetas tenis">
              <h5 class="card-title">Cuerdas</h5>
              <a href="cuerdas.php" id="main-button">Ver Más</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 text-center">
          <div class="product-card">
            <div class="card-body">
              <img src="../img/__categories/cat-bolsos.png" alt="bolsos de tenis">
              <h5 class="card-title">Bolsos</h5>
              <a href="bolsos.php" id="main-button">Ver Más</a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-4 text-center">
          <div class="product-card">
            <div class="card-body">
              <img src="../img/__categories/cat-accesorios.png" alt="accesorios">
              <h5 class="card-title">Accesorios</h5>
              <a href="accesorios.php" id="main-button">Ver Más</a>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-4 text-center">
          <div class="product-card">
            <div class="card-body">
              <img src="../img/__categories/cat-descuentos.png" alt="descuentos y promociones">
              <h5 class="card-title">Promociones</h5>
              <a href="promociones.php" id="main-button">Ver Más</a>
            </div>
          </div>
        </div>
    </section>

    <!--FOOTER -->
    <?php
      include ("footer.php");
      ?>

    <?php
      include ("link2.php");
    ?>

  </body>
</html>
