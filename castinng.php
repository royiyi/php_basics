<?php
//implicitamentedo this casteo o coversion
$val="5";//is String
print $val;
$val+=2;
$val+=3.45;
//***********CASTIN ** */
$value="5";
$number=(int)$value;
//in the same way for other variables

//******* */
$var1 = "GfG";  
$var2 = 10 % 7; 
$var3 = pow(10, 2); 
$var4 = pow(10, 0.5); 
$var5 = sqrt(9); 
  
echo gettype($var1)."\n"; 
echo gettype($var2)."\n"; 
echo gettype($var3)."\n"; 
echo gettype($var4)."\n"; 
echo gettype($var5); 
//----------
/*Output:
string
integer
integer
double
double*/
echo "<br>OPERADORES TERNARIOS<br>";
echo $var1<>"fds"? "NO SON IGUALES":"SON IGUALES";
///swtich

$name="lalo";
$age=15;
//COOL funciona
switch (true) :
    case $name == "fdd" && $age=="99":
        echo "OTER";
        break;
        case $name == "lalo" && $age=="15":
            echo "This is true";
            break;
    
    default:
        echo "NO SE ENCONTRO";
        break;
    endswitch;
    //* EXISTIN BUCLE FOR WHILE DO WHILE**/


    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
?>