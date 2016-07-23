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
<?php
	echo "Bienvenido al Administrador del Blog, ".$_SESSION['nombreApp']. " <a href=logout.php>Cerrar Sesión</a>";

	echo "<br/><br/>";
	echo "<a href=blog.php>Regresar a Blog</a>";
?>

<meta charset="UTF-8">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<form action="guardarEntrada.php" method="POST">
		<input type="text" placeHolder="Titulo de la Noticia" name="pTituloNoticia"/>
		<br/><br/>
		<select name="pCategoriaPublicacion">
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
		<!--input type="text" placeHolder="Texto de la noticia" name="pNoticia"/-->
		<textarea name="pContenidoCompleto" rows="4" cols="50"></textarea>
		<br/><br/>
		<input type="submit" value="Guardar Noticia"/>
	</form>
</body>
</html>