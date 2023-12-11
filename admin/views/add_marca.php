<div class="row my-5">
    <div class="col-6 mx-auto">
        <h1 class="text-decoration-underline fst-italic text-center mb-2 fw-bold">Agregar Nueva Marca</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_marca_acc.php" method="POST" enctype="multipart/form-data">
                <!-- enctype poder cargar imagenes al servidor -->
            
                <div class="col-md-12 mb-3 mx-auto text-center">
                <label for="nombre" class="form-label fw-bold fs-4 fst-italic">Nombre</label>
                <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="nombre" name="nombre" required>
                </div>
                
                <div class="col-md-12 mb-3 mt-3 text-center">
                <label for="imagen" class="form-label fw-bold fs-4 fst-italic">Imagen</label>
                <input type="file" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="imagen" name="imagen" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-lg btn-info fw-bold mt-3 rounded-pill shadow-lg">Cargar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
