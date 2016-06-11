<?php 

$operacion = 'division';
$valor1 = 3;
$valor2 = 4;
$resultado;

switch($operacion){
	case 'suma':
		$resultado = $valor1+$valor2;
		echo $resultado;
		break;
	case 'resta':
		if($valor1 < $valor2){
			$resultado = $valor2 - $valor1;
		} else {
			$resultado = $valor1 - $valor2;
		}
		echo $resultado;
		break;
	case 'multiplica':
		$resultado = $valor1 * $valor2;
		echo $resultado;
		break;
	case 'division':
		$resultado = $valor1 / $valor2;
		echo $resultado;
		break;
}

 ?>