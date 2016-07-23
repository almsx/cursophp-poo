<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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