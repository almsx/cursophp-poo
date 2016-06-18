<?php
		
	function diasemana($termina){
		switch ($termina) {
			case '1':
				echo "Jueves";
				break;
			case '2':
				echo "Jueves";
				break;
			case '3':
				echo "Miercoles";
				break;
			case '4':
				echo "Miercoles";
				break;
			case '5':
				echo "Lunes";
				break;
			case '6':
				echo "Lunes";
				break;
			case '7':
				echo "Martes";
				break;
			case '8':
				echo "Martes";
				break;
			case '9':
				echo "Viernes";
				break;
			case '0 ':
				echo "Viernes";
				break;
			
			
			default:
				# code...
				break;
		}
	};

	function sabatino($termina){
		if ($termina == 1 || $termina == 2) {
			echo "4to sabado";
		}if ($termina == 3 || $termina == 4) {
			echo "3er sabado";
		} if ($termina == 5 || $termina == 6) {
			echo "1er sabado";
		}if ($termina == 7 || $termina == 8) {
			echo "2do sabado";
		} if ($termina == 9 || $termina == 0) {
			echo "5to sabado";
		}	# code...
	};

	function doble($termina){
		if ($termina == 1 || $termina == 2) {
			echo "Martes";
		}if ($termina == 3 || $termina == 4) {
			echo "Lunes";
		} if ($termina == 5 || $termina == 6) {
			echo "Jueves";
		}if ($termina == 7 || $termina == 8) {
			echo "Viernes";
		} if ($termina == 9 || $termina == 0) {
			echo "Miercoles";
		}	# code...
	};
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Document</title>
	</head>
	<body>

		<table>
			<thead>
				<tr>
					<th>Placas</th>
					<th>Dia de la semana</th>
					<th>Sabatino</th>
					<th>Doble no circula</th>
				</tr>
			</thead>
			<?php
			$automoviles= array('SUA-366','GAY-105','FRO-138','OHY-387','MKA-341','MKE-499','JKL-732','YSG-286','RDQ-732','WYR-843');
			foreach ($automoviles as $auto) {
				$termina=substr($auto,-1);
			?>
				<tr>
					<td>
						<?php echo $auto; ?>
					</td>
					<td>
						<?php diasemana($termina); ?>
					</td>
					<td>
						<?php sabatino($termina); ?>
					</td>
					<td>
						<?php doble($termina); ?>
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
