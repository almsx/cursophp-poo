<?php 


class Calculadora{

	public $v1;
	public $v2;
	public $resultado;
	public $operacion;

	public function Calcu(Calculadora $valor1, $valor2, $operacion){

		$v1 = $valor1->name;
		$v2 = $valor2->name;
		//$operacion = $operacion;

	 	if($operacion == 'Suma'){
	 		
	 		$v1 = $valor1->name;
			$v2 = $valor2->name;
		
			$resultado = $v1 + $v2;
		
			echo "Total de la ".$operacion. ' es de '.$resultado."\n";
			echo "<br/>";
	 		
	 	}

	 	if($operacion == 'Division'){
	 		
	 		$v1 = $valor1->name;
			$v2 = $valor2->name;
		
			$resultado = $v1 / $v2;
		
			echo "Total de la ".$operacion. ' es de '.$resultado."\n";
			echo "<br/>";
	 		
	 	}

	 	if($operacion == 'Resta'){
	 		
	 		$v1 = $valor1->name;
			$v2 = $valor2->name;
		
			$resultado = $v1 - $v2;
		
			echo "Total de la ".$operacion. ' es de '.$resultado."\n";
			echo "<br/>";
	 		
	 	}

	 	if($operacion == 'Multi'){
	 		
	 		$v1 = $valor1->name;
			$v2 = $valor2->name;
		
			$resultado = $v1 * $v2;
		
			echo "Total de la ".$operacion. ' es de '.$resultado."\n";
			echo "<br/>";
	 		
	 	}

	 	

	}

	public function Suma( Calculadora $valor1,$valor2 ){
		
		$v1 = $valor1->name;
		$v2 = $valor2->name;
		
		$resultado = $v1 + $v2;
		
		echo "Total es ".$resultado."\n";
		echo "<br/>";

	}

	public function Resta( Calculadora $valor1,$valor2 ){
		$v1 = $valor1->name;
		$v2 = $valor2->name;
		
		$resultado = $v1 - $v2;
		
		echo "Total es ".$resultado."\n";
		echo "<br/>";

	}

	public function Multi( Calculadora $valor1,$valor2 ){
		$v1 = $valor1->name;
		$v2 = $valor2->name;
		
		$resultado = $v1 * $v2;
		
		echo "Total es ".$resultado."\n";
		echo "<br/>";

	}

	public function Division( Calculadora $valor1,$valor2 ){
		
		$v1 = $valor1->name;
		$v2 = $valor2->name;
		
		$resultado = $v1 / $v2;
		
		echo "Total es ".$resultado."\n";
		echo "<br/>";

	}

	public function Zuma($valor1,$valor2){
		$v1 = $valor1;
		$v2 = $valor2;
		
		$resultado = $v1 + $v2;
		
		echo "Total es ".$resultado."\n";
		echo "<br/>";
	}

	public function __construct($name){
		
		$this->name = $name;

	}


}

$calculo = new Calculadora('');
$valor1 = new Calculadora(5);
$valor2 = new Calculadora(4);

$calculo->Suma($valor1,$valor2);
$calculo->Resta($valor1,$valor2);
$calculo->Multi($valor1,$valor2);
$calculo->Division($valor1,$valor2);
$calculo->Calcu($valor1,$valor2,'Suma');
$calculo->Calcu($valor1,$valor2,'Resta');
$calculo->Calcu($valor1,$valor2,'Multi');
$calculo->Calcu($valor1,$valor2,'Division');
$calculo->Zuma('perro','gato');




?>