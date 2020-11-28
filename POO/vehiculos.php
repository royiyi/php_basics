<?php
/*  *** SUMMARY ****
1- clases
2- herencia
3-constructores
4- sobreescritura de metodoso
5- encapsulamiento (private)
6 - getter and setter 

*/



class Coche{
    //Here  apply the encaptulation
    // we put in private and not can acces a other class
    private $ruedas;
    
    var $color;
    protected $motor;// //can still be accessed without protected

    //builder in php tiene el mismo nombre 
    //inicializa la clase
    function Coche(){
        //this es para hacer referencia la porpia clase
        $this->ruedas=4;
        $this->color="red";
        $this->motor=1600;
        
    }

    //methods
    function arrancar(){
        echo "I'M STARTING !!!!";

    }
    function girar(){
        echo"i'm turning the car";
    }
    function frenar(){
        echo "I am stopping the car: ";
    }
    function set_color($colorCar){
        $this->color=$colorCar;
        echo "\n<br>The color has been set correctly how : $this->color \n<br>";
    }
    //******GETTER AND SETTER** */
    function get_ruedas(){
        return $this->ruedas;

    }
    function get_motor(){
        return $this->motor;

    }
    function set_ruedas($value){
       // return ;
    }
}
//*********************heritage(HERENCIA)******************* */
class camion extends Coche{

    //builder in php tiene el mismo nombre 
    //inicializa la clase
    function camion(){
        //this es para hacer referencia la porpia clase
        $this->ruedas=8;
        $this->color="grey";
        $this->motor=3600;
        
    }

    //methods
    function arrancar(){
        //call a method found in the parent class with:
        //THIS IS HOW SUPER. I JAVA BUT IN PHP IS WITH "parent ::"
  /*++++ */ parent::arrancar();

        echo "<br>THE CAMION";

    }
    //***overwriting the method it is below****
    function set_color($colorCamion){
        $this->color=$colorCamion;
        echo "\nThe color has been set correctly how : $colorCamion \n<br>";
    }
    /*************ENCAPSULATION***** 
      private . only that class can access the variable
      protected . can access variables the class and its inherited classes
      public . any class can access and is but DEFAULT   in all var
      
     
    */
}


?>
