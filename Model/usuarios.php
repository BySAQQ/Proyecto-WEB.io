<?php
class Users
{
    private $Conexion;

    public function __construct()
    {
        $this->Conexion = new connect_base();
        $this->Conexion-> mysql;
    }

    function login($ID_User,$password)
    {
        $sql="SELECT * FROM usuarios WHERE ID_User='$ID_User' AND Contraseña='$password' ";
        $result = $this->conn->conexion->query($sql); 
        return mysqli_fetch_all($result, MYSQLI_ASSOC);        
    }

}

//Fin Class Users
?>