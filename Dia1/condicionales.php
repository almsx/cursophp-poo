<?php

$edad = 17;

if ($edad >= 18){
	
	if($edad <= 75){
		echo "soy MAyor de Edad";
	} else {
		echo "Estan mintiendo con tu edad ";
	}

} else {
	
	if ($edad == 17){
		echo "estas mas cerca que nunca";
	} else

	if ($edad >= 10 && $edad <=17){
		echo "Estas cerca de ser adulto!";
	}
	else if ($edad <= 9){
		echo "estas saliendo del cascaron!";
	}

}

?>