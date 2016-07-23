<?php

include("seguridad.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Autor</title>
</head>
<body>
<?php
	echo "Bienvenido al Administrador del Blog, ".$_SESSION['nombreApp']. " <a href=logout.php>Cerrar Sesión</a>";

	echo "<br/><br/>";
	echo "<a href=autores.php>Regresar a Autores</a>";
?>

<meta charset="UTF-8">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<form action="guardarAutor.php" method="POST">
		<input type="text" placeHolder="Nombre" name="pAutorNombre"/>
		<input type="text" placeHolder="Apellido Paterno" name="pAutorAPaterno"/>
		<input type="text" placeHolder="Apellido Materno" name="pAutorAMaterno"/>
		<input type="text" placeHolder="Usuario" name="pAutorUsuario"/>
		<input type="password" placeHolder="Contraseña" name="pAutorContra"/>
		
		
		<input type="submit" value="Guardar Autor"/>
	</form>
</body>
</html>