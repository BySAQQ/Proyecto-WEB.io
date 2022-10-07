<?php
//acciones del usuario
class usuario_control
{
    private $datos;
    public function Login($ID_User,$password)
    {
   $ID_User=str_replace(" ", "", $ID_User);
   $password=str_replace(" ", "", $password);
    if (
        $ID_User != "" && $ID_User != null &&
        $password != "" && $password != null
       )
    {
       $result = $this->data->auth($ID_User,md5($password));
       if ($result)
       {
           return 1; //Bienvenida
       }
       else
       {
           return 2; //No_valida
       }
    }
    else
    {
       return 3;  //No_datos
    }
    }
}
?>