<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVIFRIO DE CODAZZI | BY SAQQ</title>
    <link rel="stylesheet" href="Estilos.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/Logo2.png">
</head>

<body class="contenedor">
    <header class="header">

        <img class="imagen" src="img/logo_size_invert2.jpg" alt="Fondo Servifrio">
        <a href="#" class="head"> Cerrar sesion </a>
        <a href="Perfil.html" class="head"> Administrador </a>

    </header>
    <nav class="navbar">
        <ul>
            <li class="lat"><img src="img/Tarjeta Logo SIEP.png" alt="Logotipo" class="logo2"></li>
            <li class="lat"><a href="Inicio.html" class="link resalt">Inicio</a></li>
            <li class="lat"><a href="Inventario.html" class="link resalt">Inventario</a></li>
            <li class="lat"><a href="Usuarios.html" class="link resalt">Usuarios</a></li>
            <li class="lat"><a href="Clientes.html" class="link resalt">Clientes</a></li>
            <li class="lat"><a href="Proveedor.html" class="link resalt">Proveedores</a></li>
            <li class="lat"><a href="Servicios.html" class="link resalt">Servicios</a></li>
        </ul>
        <aside class="lateral">

            <table class="tabla-usuarios">
                <tr>
                    <td class="Ultimas">
                        Ultimas Entradas
                    </td>
                    <tr>
                        <td>
                            <a href="Usuarios.html" class="usuario-link">Admin 1</a></td>

                    </tr>
                    <tr>
                        <td><a href="Usuarios.html" class="usuario-link">Andrea</a></td>
                    </tr>
                    <tr>
                        <td><a href="Usuarios.html " class="usuario-link">Carlos</a>
                        </td>
                    </tr>
            </table>

        </aside>
    </nav>

    <main class="main">
        <article class="articulo">
            Este aplicativo Web es creado y diseñado por Sionne A Quintero en el año 2022 para todas las compañias que deseen tener una gestion de inventario y ventas de su negocio su uso es totalmente libre.
        </article>
    
<!--Comienza el PHP-->
<?php

require ("Class/Connect_DB.php");

$Objeto = new connect_base(); //este es el objeto 
$Objeto->abrir(); 

$sql = "SELECT * FROM productos";
$result = $Objeto->mysql->query($sql);

if ($result->num_rows>0){
    //Desde aqui inicia el ECHO para el php en la tabla
    echo"<table class='tabla'>
        <thead>
            <tr>
                <th class='filtro'>
                    <a href='Inventario.html' class='Item'>Ultimos Productos Creados </a>
                </th>
            </tr>
        </thead>";

    while($row = $result ->fetch_assoc()){ //recorro la tabla
        //echo "Producto  " . $row["Nombre_P"] ."<br>";

        //registros tabla
        print"<tr>
                <td class='bordes'>
                    <a href='Inventario.html' class='Item'>".$row ["Nombre_P"]."</a>
                </td>
            </tr>";
    }
}else{
    echo "0 result";
}

$Objeto->mysql->close();

//cierro tabla
print "</table>";
?>
<!--termina php-->

    </main>

    <footer class="pie">
        Diseño por XAQQ
    </footer>

</body>
</html>