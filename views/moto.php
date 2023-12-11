<?PHP
require_once "classes/Marca.php";
require_once "classes/Moto.php";
$id = $_GET['id'] ?? FALSE;
$miObjetoMoto = new Moto();
$moto =  $miObjetoMoto->producto_x_id($id);


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=  $moto->NombreMoto();  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CDN FONTAWESOME (SERVIDOR) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    
  <?php if (isset($moto)) { ?>

<h1 class="text-center my-5 text-decoration-underline fst-italic"><?=  $moto->NombreMoto();  ?></h1>

<div class="col">
    <div class="card mb-3 border-dark border-1 mt-3 shadow-lg">
            <div class="row">
                <div class="col-5">
                <img style="height: 472px;" src="img/<?= $moto->getImagen(); ?>" class="img-fluid rounded-start border-end " alt="">

                </div>
                <div class="col-7">
                    <div class="card-body">
                           <h2 class="fs-2 m-0 fw-bold text-warning"><?=  $moto->NombreMoto();  ?></h2>
                            <h4 class="card-title fs-4 mb-4 fst-italic mt-3">Modelo : <?=  $moto->getModelo();  ?></h4>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item "><span class="fw-bold fst-italic">AÑO: <?=  $moto->getAnio();  ?></span> </li>
                        <li class="list-group-item"><span class="fw-bold fst-italic">POTENCIA: <?=  $moto->getPotencia();  ?> HP</span> </li>
                        <li class="list-group-item"><span class="fw-bold fst-italic">COMBUSTIBLE: <?=  $moto->getCombustible();  ?></span> </li>
                        <li class="list-group-item"><span class="fw-bold fst-italic"> CILINDRADA: <?=  $moto->getCilindrada();  ?> CC</span> </li>
                        <li class="list-group-item"><span class="fw-bold fst-italic">KILOMETROS: <?=  $moto->getKilometros()  ?> KM</span> </li>
                       
                    </ul>

                    <div class="card-body  mt-auto">
                        <div class="fs-3 mb-3 fw-bold text-center text-dark">$<?= $moto->precio_formateado(); ?></div>
                        <a href="index.php?sec=contacto" class="btn btn-secondary w-100 fw-bold">COMPRAR</a>
                    </div>

                </div>
            </div>
    </div>
</div>


<?php }else { ?>
<div class="col">
<h2 class="text-center m-5">No se encontró el producto deseado.</h2>
</div>
<?php } ?>
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
 
 
 