<?php

$marcas = (new Marca())->lista_completa();







?>

<div class="row my-5">
    <div class="col-6 mx-auto">
        <h1 class="text-decoration-underline fst-italic text-center mb-2 fw-bold">Agregar Nueva Moto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_moto_acc.php" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->
                 
                <div class="col-md-6 mb-3 text-center">
                    <label for="marcas_id" class="form-label fw-bold fs-5 fst-italic">Marca</label>
                    <select class="form-select border border-dark border-2 rounded-pill shadow-lg" name="marcas_id" id="marcas_id" required>
                        <option value="" selected disabled>Elija una opción</option>
                        <?PHP foreach ($marcas as $M) { ?>
                            <option value="<?= $M->getId() ?>"><?= $M->getNombre() ?></option>
                        <?PHP } ?>
                    </select>
                </div>

                <div class="col-md-6 mb-3 text-center">
                <label for="modelo" class="form-label fw-bold fs-5 fst-italic">Modelo</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="modelo" name="modelo" required>
            </div>

                
            <div class="col-md-6 mb-3 text-center">
                <label for="anio" class="form-label fw-bold fs-5 fst-italic">Año</label>
                <input type="date" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="anio" name="anio" required>
            </div>

            <div class="col-md-6 mb-3 text-center">
                <label for="combustible" class="form-label fw-bold fs-5 fst-italic">Combustible</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="combustible" name="combustible" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="potencia" class="form-label fw-bold fs-5 fst-italic">Potencia</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="potencia" name="potencia" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="cilindrada" class="form-label fw-bold fs-5 fst-italic">Cilindrada</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="cilindrada" name="cilindrada" required>
            </div>

            <div class="col-md-4 mb-3 text-center">
                <label for="kilometros" class="form-label fw-bold fs-5 fst-italic">Kilometros</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="kilometros" name="kilometros" required>
            </div>

            <div class="col-md-12 mb-3 text-center">
                <label for="imagen" class="form-label fw-bold fs-5 fst-italic">Imagen</label>
                <input type="file" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="imagen" name="imagen" required>

                <div class="col-md-12 mb-3 mt-3 text-center">
                <label for="precio" class="form-label fw-bold fs-5 fst-italic">Precio</label>
                <input type="number" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="precio" name="precio" required>
            </div>
            
            
                <button type="submit" class="btn btn-info btn-lg fw-bold mt-3 rounded-pill">Cargar</button>
                
                
            </form>
        </div>
    </div>
</div>






