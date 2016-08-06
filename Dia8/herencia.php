<?php 

class Animal{

	public $sonido = ' Hago un sonido ';

	public function obtenersonido(){
		echo " yo " . $this->sonido;
	}

	public function run(){
		echo "yo corro";
	}

	public function walk(){
		echo "yo camino";
	}

	public function __construct(){
		echo " Ha nacido un animal ";
	}

}

//class Perro{
class Perro extends Animal{

	/*
	public function run(){
		echo "yo corro";
	}

	public function walk(){
		echo "yo camino";
	}*/

	public $sonido = "Ladro";

	public function __construct(){
		echo " Ha nacido un perro ";
	}

}

class Gato extends Animal{

	/*public function run(){
		echo "yo corro";
	}

	public function walk(){
		echo "yo camino";
	}*/

	public $sonido = "Maullo";

	public function __construct(){
		//parent::__construct();
		echo " Ha nacido un gato ";
	}



}

$perrito = new Perro();
$perrito->run();
$perrito->obtenersonido();
echo "\n";
$gatito = new Gato();
$gatito->run();
$gatito->obtenersonido();

//Obtener tipo de Clases

if ($perrito instanceof Perro){
	echo "Es un perro";
}

if ($perrito instanceof Animal){
	echo "Es un Animal";
}


?>