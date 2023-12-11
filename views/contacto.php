<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CDN FONTAWESOME (SERVIDOR) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="row mt-3">
<h1 class="text-center mt-3 text-decoration-underline fst-italic">Contacto</h1>
      <form class="col-6 mx-auto p-5 mb-3" action="gracias.php" method="POST" style="background-color: #D0D4CA;">
      
        <div class="mb-3">
            <label for="nombre" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese-su-nombre" aria-label="Ingrese-su-nombre" aria-describedby="basic-addon2"required >
          </div>
          <div class="mb-3">
            <label for="apellido" class="col-form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese-su-apellido" aria-label="Ingrese-su-apellido" aria-describedby="basic-addon2" required>
          </div>
          <div class="mb-3">
            <label for="mail" class="col-form-label">E-mail</label>
            <input type="text" class="form-control" name="mail" id="mail" placeholder="Ingrese-su-e-mail" aria-label="Ingrese su e-mail" aria-describedby="basic-addon2" required>
          </div>
          <div class="mb-3">
            <label for="telefono" class="col-form-label">Telefono</label>
            <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingrese-su-telefono" aria-label="Ingrese-su-telefono" aria-describedby="basic-addon2" required>
          </div>
          <div class="mb-3">
            <label for="mensaje" class="col-form-label">Mensaje</label>
            <textarea class="form-control" name="mensaje" id="mensaje"></textarea>
          </div>
        <br>
        <div class=" d-flex flex-column justify-content-center align-items-center">
          <input class="btn btn-lg btn-outline-secondary" type="submit" value="Enviar">
        </div>
      </form>
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