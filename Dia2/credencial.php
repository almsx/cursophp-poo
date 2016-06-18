<?php 


setlocale(LC_ALL,"es_MX");

//Buenas Madrugadas
//date_default_timezone_set("Asia/Tokyo") ;

//Buenos dias
date_default_timezone_set("America/Mexico_City") ;

//Buenas Tardes
//date_default_timezone_set("Europe/Berlin") ;

//Buenas noches
//date_default_timezone_set("Indian/Chagos") ;

//print_r($_POST);
$nombre = $_POST['nombreINE'];
$edad = $_POST['edadINE'];
$sexo = $_POST['sexoINE'];



function entregarINE($edad,$nombre,$sexo){

	echo "Nos visitas para tu INE desde ".date_default_timezone_get()."<br/>";
	$hora = date("G");
	
	$saludo;

	if($hora >= 1 && $hora < 6){
		$saludo = 'Buenas Madrugadas';
	} else if($hora >= 6 && $hora < 12){
		$saludo = 'Buenos Días';
	} else if($hora >=12 && $hora < 19){
		$saludo = 'Buenas Tardes';
	} else {
		$saludo = 'Buenas Noches';
	}

	if($edad < 18){

		$Resta = 18 - $edad;

		echo "Hola ".$nombre. ' '.$saludo. ' No es posible entregarte INE ya que tienes '.$edad. ' años. Regresa al INE por tu credencial en '.$Resta.' años';

	} else {

		echo "Hola ".$nombre. ' '.$saludo. ' tu credencial te sera entregada con éxito';

	}


};

entregarINE($edad,$nombre,$sexo);


?>