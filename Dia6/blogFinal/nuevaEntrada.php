<?php

include("seguridad.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="guardarEntrada.php" method="POST">
		<input type="text" placeHolder="Titulo de la Noticia" name="pTituloNoticia"/>
		<br/><br/>
		<select name="categoriaPublicacion">
		<option>Seleccione una Opción...</option>
		
		<?php 
			include("../../utils/cnxdia3.php");
			
			$view_users_query="SELECT * from categorias ORDER BY tituloCategoria ASC"; 
        	$run=mysqli_query($dbcon,$view_users_query);  
        	while($row=mysqli_fetch_array($run)){
				echo'<OPTION VALUE="'.$row['idCategoria'].'">'.$row['tituloCategoria'].'</OPTION>';
			
			}
 
		?>

		</select>
		<br/><br/>
		<input type="text" placeHolder="Texto de la noticia" name="pNoticia"/>
		<br/><br/>
		<input type="submit" value="Guardar Noticia"/>
	</form>
</body>
</html>