<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOPE</title>
</head>
<body>
    
<?php
// declarando CONSTANTES
// nombre de  la constante,valor de la cons ,true=toma como igual si se se usan con mayus or minus //falso:solo con mayusculas
define ("NOM_const","VALOR",true);


/*cuando incluidos un archivo incluido poodemos sobreescribir nobres de varialbes */
$alcance="alcanze";

//THE CODE CAN BE SEPARATED INTO SEVERAL LABELS <?PHP""
function otherTag(){
    //para usar una variable que esta fuera de una funcion
    //debemos poer la palabra global con el nombre dentro la funcion en que quremos usar
    global $alcance;
    echo 'The value of variable is :  '. $alcance;
    $alcance="change posi";
    /*changing the value of the global variable*/

    /*
    
    rules :
    1  : " ..  'nameClassCSS'...  "
    2 :  " ...  \"nameClassCSS\" .. "
    
    */

} 

otherTag();
echo "<br> $alcance";
//no se usa $ para acceder alas variables
echo "<br> This is one constante :" . NOM_const;
//constantes predefinidas
echo "<br> This print the line of one constante PREDEFINIDA:" . __LINE__;


function variaStatic(){
  static $varStatic=0;//staic
    $varStatic++;
    echo "<br>$varStatic ";
}
//echo "";
variaStatic();
variaStatic();
variaStatic();
 /*
 when  we putn a one variable static la variable cambia la salide de este es 
 1
 2
 3
 */
?>
</body>
</html>