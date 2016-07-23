<?php

class Persona{

	public $edad;
	public $nombre;

	public function run(){
		echo " estoy corriendo";
	}

	public function walk(){
		echo "estoy caminando";
	}

	public function saludar(){
		echo $this->name . ' saluda a ' . $otronombre;
	}

	public function __construct(){
		echo "estoy siendo creado \n";

	}

}

for ($i = 0; $i <5; $i += 1){
	$person = new Persona();
}

?>