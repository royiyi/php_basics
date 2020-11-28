<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /// matrices an d arrays
    $alimentos=array("fruta"=>array(
        "tropical"=>"kiwi",
        "citrico"=>"madarina",
        "others"=>"apple"
    ),
    "milk"=>array(
        "animal"=>"vaca",
        "vegetal"=>"coco"
    ),
    "carne" =>array(
        "vacuno"=>"lomo",
        "porcino"=>"pata"
    ));
    echo $alimentos["carne"]["porcino"];
    echo"<br>---------------";
    echo"<br>";


    /*foreach ($alimentos as $key_alim => $eat) {
        echo "$key_alim: <br>";
        //list all element of all value
        while (list($key,$value)=each($eat)) {
            echo "$key = $value<br>";
        }
    }*/
    //sintaxi for print all elements of one array
    echo var_dump($alimentos);
    ?>    
</body>
</html>