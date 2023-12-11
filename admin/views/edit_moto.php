<?php
$id= $_GET['id'] ?? FALSE;

$moto = (new Moto())->producto_x_id($id);

$marcas = (new Marca())->lista_completa();




?>

<div class="row my-5">
    <div class="col">
        <h1 class="text-decoration-underline fst-italic text-center mb-5 fw-bold">Edición de datos de :
            <span class="danger" style="color: #39A7FF;"> "<?= $moto->NombreMoto()?>"</span>
        </h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_moto_acc.php?id=<?= $moto->getId()?>" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->


                <div class="col-md-6 mb-3 text-center">
                    <label for="marcas_id" class="form-label fw-bold fs-5 fst-italic">Marca</label>
                    <select class="form-select border border-dark border-2 rounded-pill shadow-lg" name="marcas_id" id="marcas_id" required>
                        <option value="" selected disabled>Elija una opción</option>
                        <?PHP foreach ($marcas as $M) { ?>
                            <option value="<?= $M->getId() ?>" <?= $M->getId() == $moto->getMarca()->getId() ? "selected" : "" ?>><?= $M->getNombre() ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            
                <div class="col-md-6 mb-3 text-center">
                <label for="modelo" class="form-label fw-bold fs-5 fst-italic">Modelo</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="modelo" name="modelo" value="<?= $moto->getModelo() ?>" required>
            </div>

                
            <div class="col-md-6 mb-3 text-center">
                <label for="anio" class="form-label fw-bold fs-5 fst-italic">Año</label>
                <input type="date" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="anio" name="anio" value="<?= $moto->getAnio() ?>" required>
            </div>

            <div class="col-md-6 mb-3 text-center">
                <label for="combustible" class="form-label fw-bold fs-5 fst-italic">Combustible</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="combustible" name="combustible" value="<?= $moto->getCombustible() ?>" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="potencia" class="form-label fw-bold fs-5 fst-italic">Potencia</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="potencia" name="potencia" value="<?= $moto->getPotencia() ?>"  required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="cilindrada" class="form-label fw-bold fs-5 fst-italic">Cilindrada</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="cilindrada" name="cilindrada" value="<?= $moto->getCilindrada() ?>" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="kilometros" class="form-label fw-bold fs-5 fst-italic">Kilometros</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="kilometros" name="kilometros" value="<?= $moto->getKilometros() ?>" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="imagen_og" class="text-decoration-underline form-label fw-bold fs-5 fst-italic">Imagen Actual</label>
                <img class="img-fluid rounded-4 shadow-sm d-block" src="../img/<?= $moto->getImagen()?>" alt="">
                <input type="hidden" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="imagen_og" name="imagen_og" value="<?=$moto->getImagen()?>">

            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="imagen" class="form-label fw-bold fs-5 fst-italic">Reemplazar Imagen</label>
                <input type="file" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="imagen" name="imagen">

            </div>

                <div class="col-md-4 mb-3 text-center">
                <label for="precio" class="form-label fw-bold fs-5 fst-italic">Precio</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="precio" name="precio" value="<?= $moto->getPrecio() ?>" required>
            </div>

            
                <div class="text-center">
                <button type="submit" class="btn btn-lg btn-info fw-bold mt-3 border border-dark border-2 rounded-pill shadow-lg">Editar</button>
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>