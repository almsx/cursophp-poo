<?php 

class Persona{
	public $age;
	public $name;
	public function run(){
		echo " estoy corriendo como funcion";
	}

	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;

	}

}

$person = new Persona('Bernardo', 10);

echo $person->name;
$person->run();

$person2 = new Persona('Marcos', 20);

echo "<br/>";
echo $person2->name;
$person2->run();


 ?>