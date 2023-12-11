<?php
$moto = (new Moto())->catalogo_completo();







?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <header>
        <h1 class="mt-5 mb-4 ms-3 text-decoration-underline fst-italic text-center">Administración de Motos</h1>
    </header>
    <div class="container">

        <div class="row mt-3">
        <div>
        <?= (new Alerta())->get_alertas() ?>
        </div>
            <table class="table table-info table-striped">
                <tr>
                    <th scope="col" width="15%">Imagen</th>
                    <th scope="col" width="15%">Marca</th>
                    <th scope="col">Año</th>
                    <th scope="col">Potencia</th>
                    <th scope="col">Combustible</th>
                    <th scope="col">Cilindrada</th>
                    <th scope="col">Kilometros</th>
                    <th scope="col">Acciones</th>
                    
                </tr>
                <?php foreach ($moto as $M) {  ?>
                    <tr>
                        <td><img src="../img/<?= $M->getImagen(); ?>" alt="" class="img-fluid rounred shadow-sm"></td>
                        <th scope="row"><?= $M->NombreMoto() ?></th>
                        <td><?= $M->getAnio(); ?></td>
                        <td><?= $M->getPotencia(); ?></td>
                        <td><?= $M->getCombustible(); ?></td>
                        <td><?= $M->getCilindrada(); ?></td>
                        <td><?= $M->getKilometros(); ?></td>
                        <td>
                            <div class="mx-auto">
                            <a class="btn btn-outline-info btn-sm fw-bold" href="index.php?sec=edit_moto&id=<?= $M->getId() ?>">Editar</a>
                            </div>
                            <div class="mx-auto">
                            <a class="btn btn-outline-danger btn-sm mt-2 fw-bold" href="index.php?sec=delete_moto&id=<?= $M->getId() ?>">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="d-grid gap-2 col-8 mx-auto mb-4">
            <a class="btn btn-info mt-5 mb-3 fw-bold fs-4 fst-italic rounded-pill" href="index.php?sec=add_moto">Cargar Una Nueva Moto</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>