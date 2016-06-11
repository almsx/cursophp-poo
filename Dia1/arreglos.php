<?php

$dato = 'Alberto';
$numero = 5;
$flotante = 5.5;
$verdadero = true; 

$semana = array('Lunes','Martes','Miercoles', 'Jueves', 'Viernes','Sabado','Domingo');

//echo $semana;
echo "Mi variable es un tipo de dato ".gettype($semana)."<br/>";


//#Imprimo solo un día de la semana
echo $semana[4];

echo "<br/><br/>";

/*Manual
for ($i = 0; $i < 7; $i++){
	echo "<li>".$semana[$i]."</li>";
}
*/

/*Dectectar tamaño del arreglo*/

$tamano = sizeof($semana);
echo "Mi arreglo mide ".$tamano;


for ($i = 0; $i < sizeof($semana); $i++ ){
	echo "<li>".$semana[$i]."</li>";
}



?>