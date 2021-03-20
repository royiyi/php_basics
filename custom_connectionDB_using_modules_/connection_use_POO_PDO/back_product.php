<?php
    require "conexion.php";
    
    class ReturnProducts extends Conexion{
        
        public function ReturnProducts(){
            //parent::__construct();
            parent::Conexion();

        } 

        public function get_poducts($data){

            $sql = "SELECT * FROM PRODUCTS WHERE COUNTRY_ORIGIN = '$data'";
            // $resultados=mysqli_query($conexion,$consulta); before

            $judgment = $this->conexion_db->prepare($sql);


            $judgment->execute(array());

            $result =$judgment->fetchAll(PDO::FETCH_ASSOC);
            
            $judgment->closeCursor();
            return  $result;
            $this->conexion_db=null;            

            // $result = $this->conexion_db->query("SELECT * FROM products");
            // $products = $result->fetch_all(MYSQLI_ASSOC);
            // return $products;
        }

    }


?>