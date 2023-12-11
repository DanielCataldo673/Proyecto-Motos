<div class="row my-5 justify-content-center">
    <div class="col col-md-5">
        <h1 class="text-decoration-underline fst-italic text-center mb-5 fw-bold">Iniciar Sessión</h1>
        <div>
            <?= (new Alerta())->get_alertas(); ?>
         </div>
         
        <form class="row g-3 text-center" action="actions/auth_login.php" method= "POST">
            <div class="col-12 mb-3">

            <label for="username" class="form-label fw-bold fs-5 fst-italic">Nombre de Usuario</label>

            <input type="text" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="username" name="username" require>

            </div>

            <div class="col-12 mb-3">

            <label for="pass" class="form-label fw-bold fs-5 fst-italic">Password</label>

            <input type="password" class="form-control border border-dark border-2 rounded-pill shadow-lg" id="pass" name="pass" require>

            </div>
            
            <div class="d-grid gap-2 col-6 mx-auto">

            <button type="submit" class="btn btn-info fw-bold border border-dark border-2 rounded-pill shadow-lg">Login</button>
            
            </div>





        </form>



    </div>

</div>