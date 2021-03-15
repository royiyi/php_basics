<!DOCTYPE html>
<html lang="en">

<head>
    <title>PREPARED QUERY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<h5>PREPARED QUERY</h5>
<P>the most effective way to avoid SQL injection</P>
    <?php

$user = $_GET["user"];
require ( "../datos_conexion.php" );

//the connection consumes records on our server
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if (mysqli_connect_errno()) {//if a connection error occurs
    echo"Fallo al conectar con la BBD";
    exit();
}

// *******************

//detect errors when connecting to the BDD
mysqli_select_db($conexion,$db_nombre)or die ("No se encuentra la BDD");
//to accept latin characters utf8
mysqli_set_charset($conexion,"utf8");


//   --------------PREPARED QUERY -------------
$sql="SELECT id_users,username,password ,telephone,address
FROM USERS WHERE USERNAME = ? ";//1

$result = mysqli_prepare($conexion,$sql);   //2
//echo "<br>".$result."<br>";

$ok = mysqli_stmt_bind_param($result,"s",$user);//3(true or false)
/*2do the type of data that we will use as criteria:
s = string
i = int */
$ok = mysqli_stmt_execute($result);


if ($ok == false) {
    echo"error executing the query";
} else {
    $ok = mysqli_stmt_bind_result($result,$id_users,$username,$password,$telephone,$address);
    echo "found items <br>";
    
    while (mysqli_stmt_fetch($result)) {
        echo $id_users."  ".$username."  ".$password."  ".$telephone."  ".$address."<br>"; 
    }
    mysqli_stmt_close($result );
}
//   --------------PREPARED QUERY -------------

mysqli_close($conexion);//


    ?>
            </tbody>
        </table>
    </div>

</body>

</html>