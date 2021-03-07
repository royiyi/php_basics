<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>same page</title>
    <?php
    function ejecuta_consulta($labusqueda){
     //$mySearch=$_GET["search"];
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
     $consulta="SELECT * FROM tasks WHERE title LIKE '%$labusqueda%'";
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
         echo "<table width='50%' align='center'><tr><td>";
         //************** 
        
         echo $fila['task_id']."</td><td> ";
         echo $fila['title']."</td><td>";
         echo $fila['description']."</td><td></tr></table>";
         //echo $fila[3]. "</td><td></tr></table>";
         //************* 
         echo "<br>";
         
     }
    
    
     mysqli_close($conexion);
    }
    ?>
</head>
<body>
    <?php
    //when we upload to the server this null variable error no longer appears
    $mySearch=$_GET["search"];
  
    // here we save the page in a variable ++
    $mipag=$_SERVER["PHP_SELF"];//for called at same page 
    // ++
    if ($mySearch != null) {
        echo "positivo";
        ejecuta_consulta($mySearch);
    }else {
        echo ("<form action='" . $mipag . "' method='get'>
    <label>Buscar: <input type='text' name='search'></label>
    <input type='submit' name='send' value='onClick!'>
    </form>"  );
    }

    ?>
</body>
</html>