<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIEP | INICIO</title>
    <link rel="stylesheet" href="../../CSS/Estilo2.css">
    <link rel="icon" type="image/png" size="16x16" href="../../img/Favicon_1.png">
</head>

<body class="contenedor">
<?php
//Header
require_once ("../../CSS/Header.php");
//navbar
require_once ("../../CSS/navbar.php");
?>

<main> 
 <article>Este aplicativo Web es creado y diseñado por Sionne A Quintero en el año 2022 para todas las compañías que deseen tener una gestión de inventario y ventas de su negocio su uso es totalmente libre.</article>

<?php

// PHP esta es la consulta
require ("../../Data/Connect_DB.php");

$Objeto = new connect_base(); //este es el objeto 
$Objeto->abrir(); 

$sql = "SELECT * FROM productos";
$result = $Objeto->mysql->query($sql);

if ($result->num_rows>0){
    //Desde aqui inicia el ECHO para el php en la tabla
    echo"<table> 
    <thead>
            <tr>
                <th>
                    <a href='Inventario.php'>Últimos Productos Creados </a>
                </th>
            </tr>
    </thead>";

    while($row = $result ->fetch_assoc()){ // ciclo para recorrer la tabla
        //echo "Producto  " . $row["Nombre_P"] ."<br>";

        //registros tabla
        echo "<tr>
                <td>
                    <a href='.../Inventario.php'>".$row ["Nombre_P"]."</a>
                </td>
            </tr>";
    }
}else{
    echo "0 result";
}

$Objeto->mysql->close(); //cierro consulta

//cierro tabla
ECHO "</table>";
?>

</main>
<?php
//Footer
require_once ("../../CSS/Footer.PHP")
?>

</body>
</html>