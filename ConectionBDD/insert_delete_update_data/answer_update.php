<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mySearch=$_GET["search"];
 require("../datos_conexion.php");


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
 
 //$consulta="SELECT * FROM productos WHERE descripcion='$mySearch'";
 $consulta="SELECT * FROM tasks WHERE task_id = '$mySearch'";
 /*
we insert wildcards to make search pages with the cmidnes % and _
 */ 

 $resultados=mysqli_query($conexion,$consulta);//TABLE VIRTUAL WHERE SE ALMACENA LA INFORMACION QUE NOS DEVUELVE
 
 $registros=1;
 //si se ejecuta es por quer ha y infortmacion en la tabla
 //si accede con exito a un registro devuelve verdadero
 
 //************ BUSQUEDA   ************
 //------ ARRAY ASOCIATIVO  -------

 while (($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))) {
     
    echo "<form action = 'update.php' method = 'get' >" ;

    echo "<input type='text' id='id' name='id' value =' ".$fila['task_id']."'readonly><br> ";


    echo "<input type = 'text' name = 'title' value = '".$fila['title']."'> <br>";

    echo "<input type = 'date' name = 'start_d' value = '".$fila['start_date']."'> <br>";

    echo "<input type = 'number' name = 'priority' value = '".$fila['priority']."'> <br>";

   // echo "<input type = 'text' name = '' value = '".$fila['description']."'> <br>";

    
    echo "<textarea name='Describe' id='Describe' rows='4' cols='25'> ".$fila['description']." </textarea>";
    
    echo "<input type = 'submit' name = 'enviando' value = 'Update !'> <br>";
    
    echo "</form>"; 
    //************* 
     echo "<br>";
     
 }


 mysqli_close($conexion);


    ?>
</body>
</html>