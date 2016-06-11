<?php 

$operacion = 'division';
$valor1 = 3;
$valor2 = 4;
$resultado;

function Suma($valor1, $valor2){
	$resultado = $valor1 + $valor2;
	echo $resultado;
};

function Resta($valor1,$valor2){
	if($valor1 < $valor2){
		$resultado = $valor2 - $valor1;
	} else {
		$resultado = $valor1 - $valor2;
	}
	echo $resultado;
};

function Multiplica($valor1,$valor2){
	$resultado = $valor1 * $valor2;
	echo $resultado;
};

function Division($valor1,$valor2){
	$resultado = $valor1 / $valor2;
	echo $resultado;
};

switch($operacion){
	case 'suma':
		Suma($valor1,$valor2);
		break;
	case 'resta':
		Resta($valor1,$valor2);
		break;
	case 'multiplica':
		Multiplica($valor1,$valor2);
		break;
	case 'division':
		Division($valor1,$valor2);
		break;
	default:
		echo "No hay operacion disponible";
		break;
};

?>