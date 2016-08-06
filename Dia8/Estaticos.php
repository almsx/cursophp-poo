<?php 

class DBStatic{
	
	public static $db_User = 'root';
	public static $db_Pass = '123';
	public static $db_Database = 'php_8';

	public static function conectarBD(){
		echo "conectando con: " . self::$db_User . ":" .self::$db_Pass . ":" . self::$db_Database;
	}
	
	
	
}

//Estatico
class BaseProfile{


	protected $conexion_Data = 'Conexion a BD';

	/*Estatico
	private function conectarBD(){
		echo $this->conexion_Data;
	}*/

	/*Herencia*/
	protected function conectarBD(){
		echo $this->conexion_Data;
	}

	public function __construct(){
		$this->conectarBD();
	}

}

class Perfil extends BaseProfile{

	private $email = 'alberto@ideashappy.com';
	public $nombre;
	public $apellido;

	public function __construct(){
		//Estatico
		$this->conectarBD();
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

/*Estatico*/
echo DBStatic::$db_User;
echo "\n";
echo DBStatic::$db_Pass;
echo "\n";
echo DBStatic::$db_Database;
echo "\n";
echo DBStatic::conectarBD();




?>