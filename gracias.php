<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

/* El método POST transmite datos de una página PHP a otra. A diferencia del método GET, estos datos no están visibles en la URL. De ahí que este método sea el más utilizado. */

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CDN FONTAWESOME (SERVIDOR) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="text-center">
   <img class="mx-auto d-block mt-4" height="350px" width="700px"  src="img/muchas-gracias-1.jpg" alt="">
   <p class="text-center  fst-italic fw-bold fs-2 mt-4 "><?= $nombre ?> <?=$apellido?> Gracias por Elegirnos<br>¡Es un gusto ayudarte!<br>Tu consulta se envió correctamente, en breve nos comunicaremos contigo.</p>
   <!-- Home -->
   <nav>
   <a href="index.php?sec=home"><img class="btn btn-outline-light mx-auto d-block" height="200px" width="200px" src="img/moto1.jpg"></a>
   </nav>
   <!-- Pagina anterior y Inicio de Pagina-->
<div class="d-flex justify-content-between"><!-- sticky-bottom /botones fijos -->
    <a class="btn btn-outline-light" onClick="history.go(-1)"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #212121;"></i></a>
    <a class="btn btn-outline-light" href="#"><i class="fa-solid fa-circle-arrow-up fa-2xl" style="color: #111212;"></i></a>
</div>
   <footer class="bg-secondary text-light text-center">
        Derechos Reservados - 2023
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  
</html>
