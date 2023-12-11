<?php
require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'] ?? FALSE;

$id = $_GET['id'] ?? false;

try {
     $moto = new Moto();

     if (!empty($fileData['tmp_name'])) {
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__."/../../img/".$postData['imagen_og'] );
        }
        $imagen = (new Imagen())->subirImagen(__DIR__."/../../img",$fileData);

        $moto->reemplazar_imagen($imagen, $id);
     }
    

    
     
     


    $moto->edit(
        $postData['modelo'],
        $postData['anio'],
        $postData['combustible'],
        $postData['potencia'],
        $postData['cilindrada'],
        $postData['kilometros'],
        $postData['precio'],
        $postData['marcas_id'],
        $id );

        (new Alerta())->add_alerta("warning", "El Marca se editó correctamente");

    header('Location: ../index.php?sec=admin_moto');
} catch (\Exception $e) {

    echo $e->getMessage();
    die("No se pudo editar la moto");
}





?>