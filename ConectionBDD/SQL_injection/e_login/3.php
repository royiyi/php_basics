<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOW DATA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>DATA USERS</h2>
<!-- **************************************************************** -->

<!-- **************************************************************** -->
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id_users</th>
        <th>username</th>
        <th>password</th>
        <th>telephone</th>
        <th>address</th>
      </tr>
    </thead>
    <tbody>
      


<?php
    $user=$_GET["user"];
    $pswd=$_GET["pswd"];
 require("../../datos_conexion.php");


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

 //FILTER OR QUERY
 
 //$consulta="SELECT * FROM productos WHERE descripcion='$mySearch'";
 $consulta="SELECT * FROM USERS WHERE USERNAME = '$user' AND PASSWORD = '$pswd'";
 
 echo $consulta;
 
 /*
we insert wildcards to make search pages with the cmidnes % and _
 */ 

 $resultados=mysqli_query($conexion,$consulta);//TABLE VIRTUAL WHERE SE ALMACENA LA INFORMACION QUE NOS DEVUELVE
 

 //si se ejecuta es por quer ha y infortmacion en la tabla
 //si accede con exito a un registro devuelve verdadero
 
 //************ BUSQUEDA   ************
 //------ ARRAY ASOCIATIVO  -------
 while (($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))) {
     //--
     echo"<tr>";
     echo"<td>".$fila['id_users']."</td>";
     echo"<td>".$fila['username']."</td>";
     echo"<td>".$fila['password']."</td>";
     echo"<td>".$fila['telephone']."</td>";
     echo"<td>".$fila['address']."</td>";
     echo"</tr>";
 }

 mysqli_close($conexion);


    ?>
    </tbody>
  </table>
</div>

</body>
</html>
