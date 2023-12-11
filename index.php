<?php

//incluir las clases

require_once "functions/autoload.php";


$secciones_validas = [
  "home"=> [
      "titulo" => "Bienvenidos"
  ],
  "motos" =>   [
      "titulo" => "Marca de Motos"
  ],
  "moto" =>   [
      "titulo" => "Detalle de Producto"
  ],
  "contacto" =>   [
       "titulo" => "Contacto"
]

];


$seccion = $_GET['sec'] ?? "home";


/* buscar si existe el  Indice del array ahora   */
if(!array_key_exists($seccion, $secciones_validas)){
  $vista = "404";
  $titulo = "404 - Pagina no encontrada";
}else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]['titulo'];
}




?>

     
    



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
    <!-- navegacion -->
    <nav class="navbar navbar-expand-lg bg-secondary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand " href="index.php?sec=home">Venta Motos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php?sec=home">Inicio</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?sec=motos&pj=1">Zanella</a></li>
            <li><a class="dropdown-item" href="index.php?sec=motos&pj=2">Yamaha</a></li>
            <li><a class="dropdown-item" href="index.php?sec=motos&pj=3">Suzuki</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<main class="container">
    <?php 
        require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

    ?>

</main>

<footer class="bg-secondary text-light text-center">
        Derechos Reservados - 2023
    </footer>



   
  </body>
</html>
