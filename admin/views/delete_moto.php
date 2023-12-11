<?php
$id = $_GET['id'] ?? false;

$moto = (new Moto())->producto_x_id($id);


?><div class="row my-5 g-3">
    <h1 class="text-center mb-5 fw-bold text-decoration-underline fst-italic">¿Está seguro que desea eliminar esta moto?</h1>


    
       <div class="col-md-6 mx-auto">
        <a class="btn btn-outline-danger d-block mt-4 fw-bold fs-4 fst-italic border border-dark border-2 rounded-pill shadow-lg" href="actions/delete_moto_acc.php?id=<?= $moto->getId() ?>">Eliminar</a>
        </div>

        </div>
   

</div>