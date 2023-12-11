<?php

$id = $_GET['id'] ?? FALSE;
$miObjetoMoto = new Moto();
$productos = $miObjetoMoto->catalogo_completo();


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- CDN FONTAWESOME (SERVIDOR) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Carrousel -->


  <div id="carouselExample" class="carousel slide mt-3">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner/banner-1.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner/banner-2.jpg" class="d-block w-100" alt="...">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-5 ">
    <h2 class="text-center text-decoration-underline fst-italic">Nuestras Marcas</h2>

    <div class="row d-flex justify-content-between gap-3 mt-3 ">

      <a class="card p-2" href="index.php?sec=motos&pj=1" style="width: 18rem; height:230px;">
        <img  src="img/marcas/zanella.jpg" class="card-img-top" alt="...">
      </a>

      <a class="card p-2" href="index.php?sec=motos&pj=2" style="width: 18rem; height:230px;">
        <img style="height: 255px;" src="img/marcas/yamaha.jpg" class="card-img-top" alt="...">

      </a>

      <a class="card p-2" href="index.php?sec=motos&pj=3" style="width: 18rem; height:230px;">
        <img src="img/marcas/suzuki.jpg" class="card-img-top" alt="...">



      </a>
    </div>


  </div>



  <div class="container mt-5">
  
    <h1 class="text-center text-decoration-underline fst-italic">Todo Nuestro catalogo</h1>




    <div class="row mt-5">

      <?php foreach ($productos as $moto) { ?>

        <div class="col-3 mb-3">

          <div class="card border-dark border-1 mt-3 shadow-lg">
            <img style="height: 200px;" src="img/<?= $moto->getImagen(); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $moto->NombreMoto(); ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary fw-bold"><?= $moto->getModelo(); ?></h6>
              <p class="card-text text-dark fw-bold">PRECIO: $<?= $moto->precio_formateado(); ?></p>
              <a class="btn btn-secondary  d-block py-3 fw-bold" href="index.php?sec=moto&id=<?= $moto->getId(); ?>">Ver mas</a>


            </div>
          </div>


        </div>

      <?php   } ?>


    </div>


  </div>
<!--Inicio de Pagina y PDF-->
<nav>
<div class="d-flex justify-content-between">
<div class="mb-4">
    
   <a download href="data/EducacionVial.pdf"><i class="fa-solid fa-file-pdf fa-2xl" style="color: #0c0d0d;"></i></a>
   <p class="text-decoration-underline fst-italic"><strong>Educación Vial</strong></p>
    </div>
    <div>
    <a class="btn btn-outline-light" href="#"><i class="fa-solid fa-circle-arrow-up fa-2xl" style="color: #111212;"></i></a>
    </div>
    
</div>
</nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>