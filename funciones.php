<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
<!-- ---------------------------------------------------------------------------- -->
<?php
/*cuando incluidos un archivo incluido poodemos sobreescribir nobres de varialbes */
$alcance="alcanze";

//THE CODE CAN BE SEPARATED INTO SEVERAL LABELS <?PHP""
function otherTag(){
    echo 'THIS IS OTHER TAG PHP IN THE SAME PAGE ';
} 

?>
<!-- ---------------------------------------------------------------------------- -->
<?php

function dateF(){
    echo '****This is one messsage from funciton*****<br>';
}



echo 'mostrando or call fucntion<br>';

dateF();
otherTag();
//require('includeAndRequiered.php');
include('include_Require/includeAndRequiered.php');
/*as it is already included we can use everything that this class has 
include:if it does not find the php file it marks the error but continues with its execution
required:If it does not find the php file, it marks the error and ends the execution at that moment
*/
thisRequi();//this function is of:includeAndRequiered.php 
/*we use functions to repeat a code or task */
?>
<h2>Continues with flujo of execute</h2>
<!-- ----------------------------funciones por referencia------------------------------------------------ -->
<?php

function referencia(&$var){
    $var++;
    return $var;
}


$brother=12;

echo "Retornando variables por funciones por referencia";

echo"<br>valor original es : $brother";
echo "<br>Return of one function" . referencia($brother);
//podmos ver que modifica el valor original que le mandamos gracias ""&"" de forma permanente
echo "<br>valor ultimo : $brother";


?>


</body>
</html>