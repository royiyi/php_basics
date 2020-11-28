<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		private static $ayuda=0;
		/* --static methods and variables---
		for static methods and variables these belong to the class itself, 
		and when we create new classes from the class these variables or 
		static methos belong to the class and do not take a copy for each created 
		object this is shared in all objects is the only variable and the method. 
		and when creating new objects of the class copies are created with their own attributes.
		
		para methodos y variables estaticas estas pertenecen a la clase en si ,
		ycuando creamos nuevas calses apartir de la clase estas variabes o methos estaticos
		 pertenecen a la clase y no sacan una copia para cada objeto creado esta se 
		 comparte en todos los obejtos es unica la variable y el methodo . y al crear nuevos
		  objetos de la clase se crean copias con sus propios atributos.
			--------------ACCeSSING INTERNAL CLASS A ONE STATIC VARIABLE -----------	
			para hacer REFERENCIA A UNA VARIABLE ESTATICA USAMO BELOW:
			  this ---> """  self::$nameVariable """""(to access within a class)
			  
			--------------ACCeSSING EXTERNAL CLASS A ONE STATIC VARIABLE -----------	
			  accessing a static variable from a class external to it 
			  example
				nameClass::$nameVariable=10000;
			

		*/
		//---------METHOD STATIC-------
		static function descuento_gobierno(){
			//condicoines co nfechas 
			if (date("m-d-y">"05-01-15")) {
				self::$ayuda=4500;
			}

			
		}
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		/************************************ */
		function climatizador(){		
			
			$this->precio_base+=2000;					
		
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				$this->precio_base+=3500;
			}
			
			else{	
				$this->precio_base+=5000;
			}
			
		}// fin tapicería
		
		function precio_final(){
			
			$valor_final=$this->precio_base-self::$ayuda;//***new!!! */
			
			return $valor_final;	
			
		}// fin precio final
		
	}// fin clase


?>