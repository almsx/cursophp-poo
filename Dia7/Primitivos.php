<?php 


class Perro{
	public $name = 'Firulais';
}

class Persona{
	
	public $age;
	public $name;
	private $dinero;
	private $todos;
	private $married;


	public function run(){
		echo "estoy corriendo";
	}

	public function walk(){
		echo "estoy caminando";
	}

	public function saludame( $otronombre ){
		//echo $this->name . ' saluda a ' . $otronombre;
		echo " Hoola, ".$otronombre;
	}

	public function saludar( Persona $otronombre ){
		//echo $this->name . ' saluda a ' . $otronombre;
		echo " Hoola, ".$otronombre->name . "\n";
	}

	public function __construct($name){
		
		$this->name = $name;

	}

	public function adoptar(Perro $instancia_perro){
		echo " hey, adopte a ". $instancia_perro->name;
	}

	public function vacia(){
		echo "\n	Soy una funcion sin paso de parametros";
	}


}

//$person1 = new Persona('Bernardo');
$person1 = new Persona('');
$person2 = new Persona('Francisco');
$person3 = new Persona('Arcelia');
$Perro = new Perro();

//$person1->saludame('Sergio');
//$person1->saludar('Sergio');
$person1->saludar($person2);
$person1->saludar($person3);
$person1->adoptar($Perro);
$person1->vacia();




?>