<?php
require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'] ?? FALSE;

$id = $_GET['id'] ?? false;

try {
    $marca = new Marca();

     if (!empty($fileData['tmp_name'])) {
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__."/../../img/marcas/".$postData['imagen_og'] );
        }
        $imagen = (new Imagen())->subirImagen(__DIR__."/../../img/marcas",$fileData);

        $marca->reemplazar_imagen($imagen, $id);
     }

     



     (new Marca())->edit($postData['nombre'],$id);
     (new Alerta())->add_alerta("warning", "El Marca se editó correctamente");

    

    header('Location: ../index.php?sec=admin_marcas');
} catch (\Exception $e) {

   /*  echo $e->getMessage(); */
    die("No se pudo editar la Marca");
}

?>

