<?php
//conexion a la bases de datos

class connect_base
{
    public $mysql; //<--Atributo

    public function abrir() //constructor
    { 
            $this->mysql = new mysqli ("localhost","root","","siep","3306");
        // Verificar conexion < -- metodos -->
        if($this->mysql->connect_errno){
            echo "Fallo con la conexion con la base de datos: ".$this->mysql-> connect_errno;
        exit();
        }
    }   
    public function cerrar(){
        $this->mysql->close();
    }
}

?>