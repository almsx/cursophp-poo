<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



	
	<table>
		<thead>
			<tr>
				<th>Vehiculo</th>
				<th>Día de la Semana</th>
				<th>Sábatino</th>
			</tr>
		</thead>
		<?php

		$vehiculos = array('XEX-982','FEM-2920','GAM-8292','REM-2830','LEL-388','PED-283','AAB-293','SEC-2934','FJF-344','ALM-395');
	
		foreach ($vehiculos as $coche) {
		# code...
		?>
		<tr>
		<td>
			<?php echo $coche; ?>
		</td>
		<td>
		<?php echo substr($coche,-1);?>
		</td>
		</tr>
		<?php } ?>

	</table>
</body>
</html>