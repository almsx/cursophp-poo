<?php

setlocale(LC_ALL,"es_MX");
date_default_timezone_set("America/Mexico_City" ) ; 
//Obtener la fecha
echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y")."<br/>";

//Obtener la hora
echo "la hora actual es ".date("h"). " minutos ".date("i") . " segundos ".date("s")."<br/>";

//Zona donde estamos
echo "Hoola ".date_default_timezone_get()."<br/>";

//Numero de Semana actual
echo "semana ".date("W")."<br/>";



?>