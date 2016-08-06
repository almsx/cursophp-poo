<?php 

class BaseBD{
	
	private $conexion_Data = 'Conexion a BD';

	private function conectarBD(){
		echo $this->conexion_Data;
	}

	public function __construct(){
		$this->conectarBD();
	}

	//4
	/*
	protected $conexion_Data = 'Conexion a BD';

	protected function conectarBD(){
		echo $this->conexion_Data;
	}

	protected function __construct(){
		$this->conectarBD();
	}
	*/

}

// 1 class Perfil{
// 2 class Perfil{
class Perfil extends BaseBD{
	
	public $nombre;
	public $apellido;
	
	/* para el 2
	public function __construct(){

	}*/

	/*Para 3*/
	public function __construct(){
		$this->conectarBD();
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		//Reglas para la asginacion de correo
		$this->email = $email;
	}


}

// 1 $instanciaBase = new BaseBD();
// 2 $instanciaBase = new Perfil();
// 3 $instanciaBase = new Perfil();
// 4 $instanciaBase = new Perfil();





?>