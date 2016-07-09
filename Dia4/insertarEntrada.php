<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="registroEntradas.php" method="POST">
		

		<SELECT NAME="categoriaPublicacion">
		<option>Seleccione una Opción...</option>
		
		<?php 
			include("../utils/cnxdia3.php");
			
			$view_users_query="SELECT * from categorias ORDER BY tituloCategoria ASC"; 
        	$run=mysqli_query($dbcon,$view_users_query);  
        	while($row=mysqli_fetch_array($run)){
				echo'<OPTION VALUE="'.$row['idCategoria'].'">'.$row['tituloCategoria'].'</OPTION>';
			
			}
 
		?>

		</SELECT>

	</form>

</body>
</html>