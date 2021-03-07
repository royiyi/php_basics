<?php


        // ALL VARIABLERS
        $id=$_GET["id"];


        $title=$_GET["title"];

        $start_d=$_GET["start_d"];
        
        $priority=$_GET["priority"];
        
        $describe=$_GET["Describe"];
        
        
        // echo "------------------ PRINT TYPE OF VARIABLE ---------------------";
        // echo "<br>  title : ".gettype($title). "<br> the priority is : ". gettype($priority) ." <br> la fecha es : ". gettype($start_d)." <br> describe :".gettype($describe)." <br> ";
       
        // echo "------------------SHOW ALL CONTENT OF THE VARIABLE ---------------------";
        // print_r($priority);
        
        // echo "<br>";
        
        // echo "------------------PRINT ALL INFORMACION OF PHP AND VERSION ---------------------";
       
        // echo phpinfo(); 
        
        
        // echo "---------------------------------------";

        // echo "<br>  title : $title <br> the priority is : $priority  <br> la fecha es $start_d <br> describe :$describe <br> ";



        require("../datos_conexion.php");
       
       
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
       
      
        $consulta="UPDATE tasks SET title = '$title',start_date = '$start_d', priority = '$priority', description = '$describe' WHERE task_id = '$id' ";
  
       
        $resultados=mysqli_query($conexion,$consulta);
        
        
        //---------------------------
        $consulta="SELECT * FROM tasks";
        
        $resultados=mysqli_query($conexion,$consulta);
        
        //---------------------------

        mysqli_close($conexion);
        
        if ($resultados == false) {
            echo "Mistake dont register";
        }else {

           
            echo "record saved <br> <br>";
            
            //---------------------------

            while (($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))) {


                echo "<table width='50%' align='center'><tr><td>";
                //************** 
               
                echo $fila['task_id']."</td><td> ";
                echo $fila['title']."</td><td>";
                echo $fila['start_date']."</td><td>";
                echo $fila['priority']."</td><td>";
                echo $fila['description']."</td><td></tr></table>";
                //************* 
                echo "<br>";
                
            }
            
            //---------------------------


    }
       
       












    ?>