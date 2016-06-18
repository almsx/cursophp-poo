<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>document</title>
</head>
	<body>


		<table>
		<thead>
		<tr>
			<th>placa </th>
			<th>dia de la semana (SIMPLE) </th>
			<th>dia de la semana (DOBlE) </th>
			<th>sabatino </th>
		</tr>
	
	</thead>>
		<?php

		$automoviles =array('ulp9548','joi9087','UKL3434','GOD7777','JUI8998','mio0989','rem1111','uio2121','lia5666','uno4754');

		foreach ($automoviles as $auto ) {
		?>

		<tr>
		<td>
			<?php echo $auto;?>
		</td>
		<td>

	<?php  substr($auto, -1); 
if (substr($auto, -1) ==1||  substr($auto, -1) ==2) {echo "jueves";}
elseif (substr($auto, -1) ==3||  substr($auto, -1) ==4) {echo "miercoles";}
elseif (substr($auto, -1) ==5||  substr($auto, -1) ==6) {echo "lunes";}
elseif (substr($auto, -1) ==7||  substr($auto, -1) ==8) {echo "martes";}
else {echo "viernes";}

?>
</td>
<td>

<?php  substr($auto, -1); 
if (substr($auto, -1) ==5||  substr($auto, -1) ==6) {echo "jueves";}
elseif (substr($auto, -1) ==9||  substr($auto, -1) ==0) {echo "miercoles";}
elseif (substr($auto, -1) ==3||  substr($auto, -1) ==4) {echo "lunes";}
elseif (substr($auto, -1) ==1||  substr($auto, -1) ==2) {echo "martes";}
else {echo "viernes";}

?>
</td>
<td>

<?php

if (substr($auto, -1) ==5||  substr($auto, -1) ==6) {echo "cuarrto sabado";}
elseif (substr($auto, -1) ==9||  substr($auto, -1) ==0) {echo "tercer sabado";}
elseif (substr($auto, -1) ==3||  substr($auto, -1) ==4) {echo "primer sabado";}
elseif (substr($auto, -1) ==1||  substr($auto, -1) ==2) {echo "segundo sabado";}
else {echo "quinto sabado";}

?>


	</td>


	</tr>
	<?php } ?>



		</table>


</html>