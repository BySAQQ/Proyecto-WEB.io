<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIEP</title>
    <link rel="stylesheet" href="../../CSS/Estilos-Login1.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/Favicon_1.png">

</head>

<body>

    <div class="login">
        <img class="logo" src="../../img/Tarjeta Logo SIEP.png" alt="Logo SIEP">
        <h1>Ingreso SIEP</h1>

        <form action="../index.php" method="post" class="">
        <input type="hidden" name="action" value="Login">   
            <!--Usuario SIEP-->

            <input type="text" placeholder="Usuario:" name='ID_User'>

            <!--Contraseña-->

            <input type="password" placeholder="Contraseña:" name="password">

            <input type="submit" value="Ingresar">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </form>
    </div>

    <?php
    
        if (isset($_REQUEST["mensaje"]))
        {
        echo"alerta prro";
        }
    
    ?>


</body>
</html>