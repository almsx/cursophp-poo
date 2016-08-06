<?php 

error_reporting(-1);

class DBStatic{
	
	protected static $db_User = 'root';
	protected static $db_Pass = '123';
	protected static $db_Database = 'php_8';

	protected static function conectarBD(){
		echo "conectando con: " . self::$db_User . ":" .self::$db_Pass . ":" . self::$db_Database;
	}
	
}

//Estatico
class BaseProfile extends DBStatic{

	protected $conexion_Data = 'Conexion a BD';
	
	protected function conectameBD(){
		echo $this->conexion_Data;
	}

	public function __construct(){
		//$this->conectameBD();
		self::conectarBD();
	}

}

class Perfil extends BaseProfile{

	private $email = 'alberto@ideashappy.com';
	public $nombre;
	public $apellido;

	/*public function __construct(){
		//Estatico
		//$this->conectarBD();
		self::conectarBD();
	}
	*/

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){

	}

	public function message(){
		echo "mensaje";
	}

}

//$estancia = new Perfil();
Perfil::message();

?>