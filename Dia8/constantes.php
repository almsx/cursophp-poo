<?php 

//2

class Config {
	const DB_User = 'root';
	const DB_User = '1234';
	const DB_User = 'db_8';
}

// 1
//class BaseProfile {
// 2
class Base Profile extends Config {

	protected $conexion_Data = 'Conexion a BD';
	
	protected function conectameBD(){
		
	}

	public function __construct(){
		$this->conectameBD();
		
	}

}

class Perfil extends BaseProfile{

	const DOMINIO_APP = 'facebook.com';

	private $email = 'alberto@ideashappy.com';
	public $nombre;
	public $apellido;

	public function __construct(){
		
		$this->conectameBD();
		//echo self::DOMINIO_APP;
		echo "conectando con: " . self::DB_User;
	}
		
	}
	

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){

	}

	public function message(){
		echo "mensaje";
	}

}

//echo Perfil::DOMINIO_APP;
$estancia = new Perfil();

?>