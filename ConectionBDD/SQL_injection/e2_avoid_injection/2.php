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

    <?php

require("../../datos_conexion.php");

//the connection consumes records on our server
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if (mysqli_connect_errno()) {//if a connection error occurs
    echo"Fallo al conectar con la BBD";
    exit();
}
// *******************
//mysqli_real_escape_string == DELETE ALL OTHER CHARACTERES
/* function escapes special characters in a string for use in an SQL query 
--avoid all types of characters included if they put numeric as ASCII

[MYSQLI_ADDSLASHES()== THIS FUNCTION ]
**This function is not effective since it does not block all characters and allows you to put ASCII numbers

*/

$user=mysqli_real_escape_string($conexion,$_GET["user"]);
$pswd=mysqli_real_escape_string($conexion,$_GET["pswd"]);
// *******************

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

//mysqli_query($conexion,$consulta);//TABLE 
$resultados=mysqli_query($conexion,$consulta);


if (mysqli_affected_rows($conexion)>0) {//Get number of affected rows in previous MySQL operation
  echo"<br> rows have been successfully affected";
  ?>

    <div class="container">
        <h2>DATA USERS</h2>
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




}else {
  echo"rows have not been affected not show DATTA";
}

 mysqli_close($conexion);


    ?>
            </tbody>
        </table>
    </div>

</body>

</html>