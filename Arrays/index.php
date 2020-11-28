<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     //** 1 **assigning variables with default indexes
     $week[]="Monday";//default 0
     $week[]="Tuesday";//default 1
     $week[]="Friday";//default 2
     echo $week[1];
     /*
     ** 22 ** can also be created by initializing the indexes
     */
    $name[0]="yiyi";
    $name[1]="SOPHIA";
    $name[2]="RODER";
    echo "<br>".$name[1];
    /*-----creando vectores por defecto-------*/
    $name=array(15,20,5,45,100);
    echo "<br>".$name[2];
    /*      ++ assign names to indexes ++     */
    $date=array("name"=>"Rodrigo","last_name"=>"Espejo","age"=>21);
    /*NOTE :WHEN WE WRITE A VARIABLE WITH THE SAME NAME OF AN ARRAY, IT WILL BE OVERWRITTEN AND THERE WILL BE AN ERROR, BE CAREFUL !!
    * ARRAYS ARE ALSO USED FOR DATABASE QUERIES
    $date="robert";//override
    */
    echo "<br>name:".$date["name"] ." age:" .$date["age"]."<br>";
    //this method check if it's arrays
    if (is_array($date)) {
        echo"Yes it is array";
    }else{
        echo"NO it is array";
    }
    echo "<br>----------------<br>";
    
     /* */
     echo"<br>";
     $numero=array(15,20,5,45,100);
     for ($i=0; $i <count($numero); $i++) { 
         echo $numero[$i]."<br>";
     }
     /* ++ ADDING ITEMS TO ARRAY WITH INDEX NAME ++*/
     $date["country"]="UUEE";
     /*print all value of 
    traversing an associative array in a foreach
    */
    foreach($date as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
     }

     ?>
</body>
</html>