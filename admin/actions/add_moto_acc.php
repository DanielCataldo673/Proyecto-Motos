<?php
require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'];

try {
    $moto = new Moto();

    $imagen = (new Imagen())->subirImagen(__DIR__."/../../img",$fileData);
    
    $idMoto = $moto->insert(
        $postData['modelo'],
        $postData['anio'],
        $postData['combustible'],
        $postData['potencia'],
        $postData['cilindrada'],
        $postData['kilometros'],
        $imagen,
        $postData['precio'],
        $postData['marcas_id'],

    );
   
 //instancia de la alerta
 (new Alerta())->add_alerta("success", "La Moto se cargó correctamente");
    

    header('Location: ../index.php?sec=admin_moto');
} catch (\Exception $e) {
    die("No se pudo cargar la Moto");
}





?>