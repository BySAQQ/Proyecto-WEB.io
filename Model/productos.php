<?php

class Productos_model 
{
    private $conexion; 

    private $productos; 

    public function __construct()
    {
     require_once ("Connect_DB.php");
     $this->conexion=connect_base::abrir();

     $this->productos=array();
    }

    public function get_productos()
    {
    $consulta=$this->conexion->query("SELECT * FROM PRODUCTOS");

    while ($filas=$consulta->fetch (PDO::FETCH_ASSOC)){
        $this->productos []=$filas;
    };

    return $this->productos;
    }


}
