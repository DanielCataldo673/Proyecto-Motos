<?php
require_once "../../functions/autoload.php";
 $id = $_GET['id'] ?? FALSE;

 $moto = (new Moto())->producto_x_id($id);

 try {
    if (!empty($moto->getImagen())) {
        (new Imagen())->borrarImagen(__DIR__."/../../img/motos/".$moto->getImagen() );
    }

    $moto->delete();
    (new Alerta())->add_alerta("danger", "La Moto se eliminó correctamente");
    header('Location: ../index.php?sec=admin_moto');


 } catch (\Exception $e) {
    die("No se pudo eliminar la moto");
 }


 
?>




