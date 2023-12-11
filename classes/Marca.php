<?php
class Marca {
    protected $id;
    protected $nombre;
    protected $imagen;
   


/* devuelve los datos de un marca en particular */

public function get_x_id(int $id) : ?Marca {

     //llamamos a la conexion
     $conexion = (new Conexion())->getConexion();

     $query = "SELECT * FROM marcas WHERE id = $id";
 
     $PDOStatement = $conexion->prepare($query);
 
     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
 
     $PDOStatement->execute();
    
     $result = $PDOStatement->fetch();
 
     if (!$result) {
         return null;
     }
 
     return $result;
}

/* Devuele el listado completo de marcas */

public function lista_completa() : array {
    $resultado = [];

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM marcas";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;
}


/* Metodo Para Insertar un nueva marca a la BD */

public function insert($nombre, $imagen){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO marcas(id,nombre,imagen) VALUES(NULL, :nombre, :imagen)";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'nombre' => $nombre,
        'imagen' => $imagen,
        ]
        );
}
/* editar marcas */
public function edit($nombre, $id){
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE  marcas SET nombre = :nombre WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'nombre' => $nombre,
        
        ]
        );
}

/* Remplazar Imagen */

public function reemplazar_imagen($imagen,$id){
    $conexion = (new Conexion())->getConexion();
    $query = "UPDATE marcas SET imagen = :imagen WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'imagen' => $imagen,
        
        
        ]
        );


   }
/* Eliminar Marca */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM marcas WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);



}

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
}
?>