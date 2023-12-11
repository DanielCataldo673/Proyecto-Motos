<?php
$marcas = (new Marca())->lista_completa();




?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración de Marcas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <header>
        <h1 class="mt-5 ms-3 text-decoration-underline fst-italic text-center">Listado de Marcas</h1>
    </header>
    <div class="container">

        <div class="row mt-3 col-6 mx-auto">
        <div>
        <?= (new Alerta())->get_alertas() ?>
        </div>

            <table class="table table-info table-striped">
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                    
                </tr>
                <?php foreach ($marcas as $marca) {  ?>
                    <tr>
                        <td><img width="200px" height="200px" src="../img/marcas/<?= $marca->getImagen(); ?>" alt="" class="img-fluid rounded-circle shadow-sm"></td>
                        <th scope="row"><?= $marca->getId() ?></th>
                        <td><?= $marca->getNombre(); ?></td>

                        <td>
                            <div class="mx-auto">
                            <a class="btn btn-outline-info btn-sm fw-bold" href="index.php?sec=edit_marca&id=<?= $marca->getId() ?>">Editar</a>
                            </div>
                            <div class="mx-auto">
                            <a class="btn btn-outline-danger btn-sm mt-2 fw-bold" href="index.php?sec=delete_marca&id=<?= $marca->getId() ?>">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a class="btn btn-info mt-2 mb-3 fw-bold fs-5 rounded-pill" href="index.php?sec=add_marca">Cargar Nueva Marca</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>