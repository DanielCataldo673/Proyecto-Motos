<?php

class Moto {
    protected $id;
    protected $modelo;
    protected $anio;
    protected $combustible;
    protected $potencia;
    protected $cilindrada;
    protected $kilometros;
    protected $imagen;
    protected $precio;
    protected $marcas;

    protected $createValues= ['id', 'modelo', 'anio',
      'combustible', 'potencia', 'cilindrada', 'kilometros', 'imagen', 'precio'];

      

      /* Metodo Para Insertar un nueva moto a la BD */

public function insert($modelo,$anio,$combustible,$potencia,$cilindrada,$kilometros,$imagen,$precio,$marcas_id){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO motos VALUES (NULL,:modelo,:anio,:combustible,:potencia,:cilindrada,:kilometros,:imagen,:precio,:marcas_id)";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'modelo' => $modelo,
        'anio' => $anio,
        'combustible' => $combustible,
        'potencia' => $potencia,
        'cilindrada' => $cilindrada,
        'kilometros' => $kilometros,
        'imagen' => $imagen,
        'precio' => $precio,
        'marcas_id' => $marcas_id,

        ]
        );
}


/* editar moto */

public function edit($modelo,$anio,$combustible,$potencia,$cilindrada,$kilometros,$precio,$marcas_id,$id){
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE motos SET
       modelo = :modelo,
       anio = :anio,
       combustible = :combustible,
       potencia = :potencia,
       cilindrada = :cilindrada,
       kilometros = :kilometros,
       precio = :precio,
       marcas_id = :marcas_id
       WHERE id = :id";


    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,    
        'modelo' => $modelo,
        'anio' => $anio,
        'combustible' => $combustible,
        'potencia' => $potencia,
        'cilindrada' => $cilindrada,
        'kilometros' => $kilometros,
        'precio' => $precio,
        'marcas_id' => $marcas_id,

        ]
        );
}



/* Remplazar Imagen */

public function reemplazar_imagen($imagen,$id){
    $conexion = (new Conexion())->getConexion();
    $query = "UPDATE motos SET imagen = :imagen WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'imagen' => $imagen,
        
        
        ]
        );


   }


    /* Eliminar moto */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM motos WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);

}

    
    /* Devuelve es una instancia del objeto moto, con todas sus propiedades */
    public function createMoto($motoData) : Moto {
        $moto = new self();
  /* primero, por cada valor en nuestro array de valores, buscamos el valor correspondiente y se lo asignamos a la propiedad */

        foreach ($this->createValues as $value) {
            $moto->{$value} = $motoData[$value];
        }
      
     /* Motos*/

     $moto->marcas = (new Marca())->get_x_id($motoData['marcas_id']);

     

     return $moto;
    }


     
    //Metodo
    //Devuele catalogo Completo

    public function catalogo_completo() : array {
        $catalogo = [];
    
        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM motos";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute();

        while($result = $PDOStatement->fetch()){
            $catalogo[] = $this->createMoto($result);
        }

        return $catalogo;
    }

    
       

        //Devuelve el catalogo de productos de un moto en particular

        public function catalogo_x_motos(int $id) : array {
            $catalogo = [];
    
            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM motos WHERE marcas_id= ?";
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
    
            $PDOStatement->execute(
                [$id]
            );
    
            while($result = $PDOStatement->fetch()){
                $catalogo[] = $this->createMoto($result);
            }
    
            return $catalogo;
        



}

//Devuelve los datos de un moto en particular

public function producto_x_id(int $idProducto) : ?Moto {
    

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM motos WHERE id = :idProducto";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

    $PDOStatement->execute(
        [
            'idProducto' => $idProducto
        ]
    );

    $result = $this->createMoto($PDOStatement->fetch());

    if (!$result) {
        return null;
    }

    return $result;


}

//Precio formateado

public function precio_formateado(){
    return number_format($this->precio, 2, ",", ".");
}

/* public function getMarca()
{
    $marca = (new Marca())->get_x_id($this->marcas) ;
    $nombre = $marca->getNombre() ;
    return $nombre ;
} */

public function NombreMoto() {
    return $this->getMarca()
    ->getNombre();
}
    

   /* GETTER */

   public function getMarca() :Marca
   {
       return $this->marcas;
   }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Get the value of anio
     */ 
    public function getAnio()
    {
        // Supongamos que $this->anio contiene una fecha en formato YYYY-MM-DD
        return date('Y-m-d', strtotime($this->anio));
    }

    /**
     * Get the value of combustible
     */ 
    public function getCombustible()
    {
        return $this->combustible;
    }

    /**
     * Get the value of potencia
     */ 
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Get the value of cilindrada
     */ 
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * Get the value of kilometros
     */ 
    public function getKilometros()
    {
        return $this->kilometros;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    
}




?>




