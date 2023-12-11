<?php
$id = $_GET['id'] ?? false;

$marca = (new Marca())->get_x_id($id);


?><div class="row my-5 g-3">
    <h1 class="text-center mb-5 fw-bold text-decoration-underline fst-italic">¿Está seguro que desea eliminar esta marca?</h1>


    <div class="col-12 col-md-6 ">
        <img class="img-fluid rounred shadow-md d-block mx-auto mb-3" src="../img/marcas/<?= $marca->getImagen()?>" alt="">
    </div>

    <div class="col-12 col-md-6">
        <h2 class="text-decoration-underline fst-italic">Nombre</h2>
        <p class=" fs-3 fw-bold fst-italic"><?= $marca->getNombre()?></p>
       
        <a class="btn btn-outline-danger d-block mt-4 fw-bold fs-4 fst-italic border border-dark border-2 rounded-pill shadow-lg" href="actions/delete_marca_acc.php?id=<?= $marca->getId() ?>">Eliminar</a>
        </div>
   

</div>