<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border:2px dotted BLACK;
    }
    </style>
</head>
<body>
<?php
    /* 
    Advertencia
Esta extensión fue declarada obsoleta en PHP 5.5.0 y eliminada en PHP 7.0.0. En su lugar debería utilzarse las 
extensiones MySQLi o PDO_MySQL. Véase también la guía MySQL: elegir una API y sus P+F relacionadas para más información. 
Alternatives to this function include:
mysqli_connect()
PDO::__construct()
    */
   require("datos_conexion.php");


    //the connection consumes records on our server
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    if (mysqli_connect_errno()) {//if a connection error occurs
        echo"Fallo al conectar con la BBD";
        exit();
    }
    //detect errors when connecting to the BDD
    mysqli_select_db($conexion,$db_nombre)or die ("No se encuentra la BDD");
    //to accept latin characters utf8
    mysqli_set_charset($conexion,"utf8");

    //$consulta="SELECT * FROM DATOSPERSONALES";
    //$consulta="SELECT * FROM SHEET1";
    //FILTER OR QUERY
    $consulta="SELECT * FROM SHEET1 WHERE TYPES=12";

    $resultados=mysqli_query($conexion,$consulta);//TABLE VIRTUAL WHERE SE ALMACENA LA INFORMACION QUE NOS DEVUELVE
    
    $registros=1;
    //si se ejecuta es por quer ha y infortmacion en la tabla
    //si accede con exito a un registro devuelve verdadero
    while (($fila=mysqli_fetch_row($resultados))) {
        echo "<table width='50%' align='center'><tr><td>";
        //************** 
       
        echo $fila[0]."</td><td> ";
        echo $fila[1]."</td><td>";
        echo $fila[2]."</td><td>";
        echo $fila[3]. "</td><td></tr></table>";
        //************* 
        echo "<br>";
        
    }
    mysqli_close($conexion);//cerramos para que ya no consuma recursos en nuestra CP
    /*
    mysql_fetch_row($resultados) = no  tiene soporte
    mysqli_fetch_row($resultados) = si tiene coexion
    */
?>
    
</body>
</html>