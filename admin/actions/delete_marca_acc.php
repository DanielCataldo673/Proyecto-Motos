<?php
require_once "../../functions/autoload.php";
 $id = $_GET['id'] ?? FALSE;

 $marca = (new Marca())->get_x_id($id);

 try {
    if (!empty($marca->getImagen())) {
        (new Imagen())->borrarImagen(__DIR__."/../../img/marcas/".$marca->getImagen() );
    }

    $marca->delete();
    (new Alerta())->add_alerta("danger", "La Marca se eliminó correctamente");

    header('Location: ../index.php?sec=admin_marcas');


 } catch (\Exception $e) {
    die("No se pudo eliminar la marca");
 }


 /* text-decoration-underline fst-italic */
?>