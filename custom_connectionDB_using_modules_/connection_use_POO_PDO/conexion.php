<?php


require("config.php");
    class Conexion{

        protected $conexion_db;

        /*------protected-------- 
         the property or method can be accessed within the class and by classes derived from that class */

        public function Conexion(){
        
            
           //*********************************
           
           try {
            //PDO


            $this->conexion_db = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');

            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

            return $this->conexion_db;

        } catch (Exception $e) {

            die('Error :' . $e->getLine());
        } 
           




           //*********************************
            // $this->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
        
            // if ($this->conexion_db->connect_error) {
            //     echo "failed to connect MySQL" . $this->conexion_db->connect_error;
                
            //     return;
            // } 
            
            // $this->conexion_db->set_charset(DB_CHARSET);
        }

    }


?>