	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<meta charset="UTF-8">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<?php 


		session_start();
		session_destroy();
		echo "Su Sesión finalizo exitosamente";
		echo "<br/>";
		echo "<br/>";
		echo "<a href=login.html>  Iniciar Sesion</a>";

		?>
	</body>
	</html>


