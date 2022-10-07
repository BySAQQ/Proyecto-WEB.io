<?php
require ("Data/Connect_DB.php");
require ("Controller/User_Control.php");

$action=NULL;
if(isset ($_REQUEST["action"])) 
    $action = $_REQUEST["action"];

switch ($action) {
    case 'login':
        $usuario_control = new usuario_control();
        $result=$usuario_control -> Login (
                                            $_REQUEST["ID_User"],
                                            $_REQUEST["password"]
                                        );
        if ($result == 1) {
            $mensaje= 'Bienvenido a SIEP';
            header("Location:View/Inicio_p.php");
        }
        elseif ($result == 2) {
            $mensaje="Alguna credencial de usuario es invalida";                           
            header("Location:View/Login/login.php");
        }
        elseif ($result == 3) {
            $mensaje= "Alguna credencial no fue ingresada reintente";
            header("Location:View/Login/login.php");
        }
        break;
    case 'LogOut':
        header("Location: View/LogOut.php");
        break;

    default:
    header("Location: ");
        break;

    case 'Inicio':
        header ("Location: View/Inicio/Inicio_p.php");
        break;
}
?>