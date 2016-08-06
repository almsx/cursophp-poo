<?php 

class Perfil{
	
	// 2private $email = 'b@correo.com';
	// 1 public $email;
	public $nombre;
	public $apellido;
	
	public function __construct(){

	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		//Reglas para la asginacion de correo
		$this->email = $email;
	}

	private function obtenerDetalles(){
		//Por ejemplo para base de datos
	}
}

$miPerfil = new Perfil();

// 1 $miPerfil->email = 'alberto@ideashappy.com';

//echo $miPerfil->email;
// 2 echo $miPerfil->getEmail();




?>