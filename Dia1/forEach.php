<?php 

$paises = array(
	'Mexico', 'España', 'Colombia', 'Peru', 
	'Argentina', 'Venezuela', 'Guatemala', 'Francia', 'Escocia', 'Brasil'
);

//For Each
foreach($paises as $pais){
		
		echo "<li>".$pais . '</li>';
		
}

//For tradicional
/*
for ($i = 0; $i < sizeof($paises); $i +=1){
	echo "<li>".$paises[$i]."</li>";
}*/

?>