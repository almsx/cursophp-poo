<?php 

class RFC{
	public $valor1;
	public $valor2;
	public $valor3;
	public $valor4;
	public $valor5;
	public $valor6;
	public $nombre;
	public $apellidoP;
	public $apellidoM;
	public $año;
	public $mes;
	public $dia;
	public $RFC = "";

	public function GeneraRFC(RFC $valor1, $valor2, $valor3, $valor4, $valor5,$valor6){

		//Obtener informacion
		//2 letras apellido paterno
		//1 letra apellido materno
		//1 letra nombre
		//2 digitos año
		//2 digitos mes
		//2 digitos dia
		$apellidoP = substr($valor2->name,0, 2);
		$apellidoM = substr($valor3->name,0,1);
		$nombre = substr($valor1->name,0,1);
		
		//$año = substr($valor4->name, 0,2);
		//$mes = substr($valor5->name, 0,2);
		//$dia = substr($valor6->name, 0,2);

		//strlen mide el tamaño de la cadena
		$tamano = strlen($valor4->name);
		if($tamano == 4){
			$año = substr($valor4->name, 2,3);
		} else {
			$año  = $valor4->name;
		}

		//strlen mide el tamaño de la cadena
		$tamano2 = strlen($valor5->name);
		if($tamano2 == 2){
			$mes = $valor5->name;
		} else {
			$mes  = '0'.$valor5->name;
		}

		//strlen mide el tamaño de la cadena
		$tamano3 = strlen($valor6->name);
		if($tamano3 == 2){
			$dia = $valor6->name;
		} else {
			$dia  = '0'.$valor6->name;
		}



		//Generamos el RFC

		$RFC = $apellidoP."".$apellidoM."".$nombre."-".$año."-".$mes."-".$dia;

		//Mayusculas
		echo strtoupper($RFC);
		//Minusculas
		echo strtolower($RFC);

	}

	public function __construct($name){
		
		$this->name = $name;

	}
}


$miRFC = new RFC('');
$valor1 = new RFC('GUILLERMO');
$valor2 = new RFC('san roman');
$valor3 = new RFC('tajonar');
$valor4 = new RFC('1982');
$valor5 = new RFC('01');
$valor6 = new RFC('22');

$miRFC->GeneraRFC($valor1,$valor2,$valor3, $valor4, $valor5, $valor6);



?>