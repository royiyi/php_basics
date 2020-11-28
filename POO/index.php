<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
<?php
//creating a class
include("vehiculos.php");
//creating an object of the class
$toyota= new Coche();
$toyota->girar();
//echo "\n accediendo al atributo ruedas :".$toyota->ruedas;
$toyota->set_color("Orange");
//######## here starding the herenc ########
$trailer=new camion();
$trailer->set_color("purpuse");
$trailer->arrancar();
//++++ENCAPSULATION++++++
//------her----
/* 
here we can see that our data is not safe and can be modified
BUT IT HAS  PUBLIC BUT DEFAULT
$toyota->ruedas=7;*/
echo "<br>The ruedas actuales son : ".$toyota->get_ruedas();
//----------with protected----
echo "<br>The (protected)motor update is :".$trailer->get_motor();

?>

</body>
</html>
