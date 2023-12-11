<?php
require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'];

try {
    $imagen = (new Imagen())->subirImagen(__DIR__."/../../img/marcas",$fileData);

    (new Marca())->insert($postData['nombre'],$imagen);

            //instancia de la alerta
    (new Alerta())->add_alerta("success", "La Marca se cargó correctamente");
    

    header('Location: ../index.php?sec=admin_marcas');
} catch (\Exception $e) {
    die("No se pudo cargar la Marca");
}

