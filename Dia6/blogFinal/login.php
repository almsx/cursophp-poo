<?php

//Reanudamos la sesión 
session_start(); 

//Validamos si existe realmente una sesión activa o no 
if(isset($_SESSION['nombreApp'])){ 
	
	header("Location: panel.php"); 
	exit();
  
} else {
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<meta charset="UTF-8">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<form action="acceso.php" method="POST">
		<input type="text" name="pUsuario" placeHolder="Usuario"/>
		<br/>
		<input type="password" name="pContra" placeHolder="Contraseña"/>
		<br/>
		<input type="submit" value="Ingresar al Blog"/>
	</form>
	<a href="index.php">Ir al Blog</a>

</body>
</html>

<?php
}
?>