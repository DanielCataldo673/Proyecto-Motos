<?php 
require_once "classes/Marca.php";
require_once "classes/Moto.php";

  $motoSeleccionada =  $_GET['pj'] ?? FALSE ;

  $miObjetoMoto = new Moto();

  $productos = $miObjetoMoto->catalogo_x_motos($motoSeleccionada);

 
  $nombre = (new Marca())->get_x_id($motoSeleccionada);
/* $miTitulo = $motoSeleccionada ?  ucwords(str_replace("_"," ", $motoSeleccionada )) : FALSE; */


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
  <h1 class="text-center mt-3 text-decoration-underline fst-italic"> Marca Seleccionada <?=  $nombre->getNombre();  ?> </h1>
  

<div class="row mt-5">
    
<?php if (count($productos)) { ?>
<?php foreach ($productos as $moto) { ?>

 <div class="col-6  mb-3">
 

            <div class="card border-dark border-1 mt-3 shadow-lg">
                
                <img style="height: 400px;" src="img/<?=  $moto->getImagen();  ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h2 class="card-title"><?=  $moto->NombreMoto();  ?></h2>
                        <h4 class="card-subtitle mb-2 text-body-secondary fw-bold"><?=  $moto->getModelo();  ?></h4>
                        <p class="card-text text-dark fw-bold fs-5">PRECIO: $<?= $moto->precio_formateado();  ?></p>
                        <a class="btn btn-secondary d-block py-3 fw-bold" href="index.php?sec=moto&id=<?= $moto->getId(); ?>">Ver mas</a>

                </div>
            </div>


        </div>

    <?php   } ?>
    <?php } else { ?>
    <div class="col">
        <h2 class="text-center mb-5">No se encontraron productos.</h2>
    </div>
<?php } ?>

</div>
<nav>
   <a href="index.php?sec=home"><img class="btn btn-outline-light mx-auto d-block" height="200px" width="200px" src="img/moto1.jpg"></a>
   </nav>
   <!-- Pagina anterior y Inicio de Pagina-->
<div class="d-flex justify-content-between"><!-- sticky-bottom /botones fijos -->
    <a class="btn btn-outline-light" onClick="history.go(-1)"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #212121;"></i></a>
    <a class="btn btn-outline-light" href="#"><i class="fa-solid fa-circle-arrow-up fa-2xl" style="color: #111212;"></i></a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


