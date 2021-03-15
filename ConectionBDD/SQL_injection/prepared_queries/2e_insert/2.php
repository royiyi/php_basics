<?php


        // ALL VARIABLERS

        $title=$_GET["title"];

        $start_d=$_GET["start_d"];
        
        $priority=$_GET["priority"];
        
        $describe=$_GET["Describe"];
 


        require ("../datos_conexion.php");
       
       
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
       
      //   --------------PREPARED QUERY -------------

        $sql="INSERT INTO tasks (title,start_date,priority,description) VALUES(?,?,?,?)";
        $result = mysqli_prepare($conexion,$sql);   //2
        //echo "<br>".$result."<br>";

        $ok = mysqli_stmt_bind_param($result,"ssis",$title,$start_d,$priority,$describe);//3(true or false)
        /*2do the type of data that we will use as criteria:
        s = string
        i = int */
        $ok = mysqli_stmt_execute($result);
        
    if ($ok == false) {
        echo"error executing the query";
    } else {
        echo "Successful registration<br>";

        mysqli_stmt_close($result );
}
//   --------------PREPARED QUERY -------------
        
        //---------------------------

        mysqli_close($conexion);



    ?>