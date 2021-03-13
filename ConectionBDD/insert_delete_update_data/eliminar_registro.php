<?php


        // ALL VARIABLERS

        $id_t=$_GET["id_task"];



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
       
      
        $consulta="DELETE FROM tasks WHERE task_id = '$id_t' ";
  
       
        $resultados=mysqli_query($conexion,$consulta);
        
        //---------------------------


            // Gets the number of affected rows in a previous MySQL operation
            if (mysqli_affected_rows($conexion) == 0) {
                echo "no hay registros para eliminar con ese criterio";
                
            }else{
                
                echo "Se han eliminado ".mysqli_affected_rows($conexion)." registro";
                
            }
            
            
            
            
            
            //---------------------------
            $consulta="SELECT * FROM tasks";
            
            $resultados=mysqli_query($conexion,$consulta);
            
            //---------------------------
            
            mysqli_close($conexion);
       
        
        if ($resultados == false) {
            echo "Mistake dont register";
        }else {

           
            // echo "record saved <br> <br>";


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