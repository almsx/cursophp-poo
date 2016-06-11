<?php

$mes = 'febrero';
//$mes = $mes.strtolower()/Minusculas
//mes = $mes.strtoupper();//Mayusculas

//strtolower($mes);
//strtoupper($mes);
echo strtoupper($mes);
//
$almacena = strtoupper($mes);

switch($almacena){
	case 'ENERO':
		echo "feliz Año nuevo";
	break;
	case 'FEBRERO':
		echo "feliz san Valentin";
	break;
	case "SEPTIEMBRE":
		echo "fiestas patrias";
	break;
	case "DICIEMBRE":
		echo "feliz navidad";
	break;
	default:
		echo "en este mes no hay ninguna celebracion";
	break;
}


?>