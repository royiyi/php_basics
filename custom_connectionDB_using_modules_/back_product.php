<?php
    require "conexion.php";
    
    class ReturnProducts extends Conexion{
        
        public function ReturnProducts(){
            //parent::__construct();
            parent::Conexion();

        } 

        public function get_poducts(){
            $result = $this->conexion_db->query("SELECT * FROM products");
            $products = $result->fetch_all(MYSQLI_ASSOC);
            return $products;
        }

    }


?>