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
	include("seguridad.php"); 
	//session_start();
	echo "Bienvenido al Administrador del Blog, ".$_SESSION['nombreApp']. " <a href=logout.php>Cerrar Sesión</a>";
	?>
<ul>
		<li><a href="albums.php">Albums</a></li>
		<li><a href="autores.php">Autores</a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="encuestas.php">Encuestas</a></li>
	</ul>
</body>
</html>