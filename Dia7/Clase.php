<?php

class Persona{

	public $edad;
	public $nombre;

	public function run(){
		echo " estoy corriendo \n";
	}

	public function walk(){
		echo "estoy caminando";
	}

	public function saludar( $otronombre ){
		
		echo $this->name . ' saluda a ' . $otronombre;
	
	}
	
	public function __construct(){
		
		//echo "estoy siendo creado ".rand(1,29)." \n";
		for ($i = 0; $i < 10; $i +=1){
			echo $i;
		}
		

	}

}

/*for ($i = 0; $i <55; $i += 1){
	
	//$person = new Persona()
}*/

$person = new Persona();
$person->run();
$person->walk();
$person->saludar('Erick');

?>