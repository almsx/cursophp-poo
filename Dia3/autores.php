<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Listado de Autores</h1>

	<h1>Agregar Autores</h1>
	<form action="altaAutores.php" method="POST">
		<p>Nombre: <input type="text" placeHolder="Nombre" name="nameUser"/></p>
		<p>Apellido(s): <input type="text" placeHolder="Apellido" name="apeUser"/>
		<p>Usuario: <input type="text" placeHolder="Usuario" name="userUser"/>
		<p>Contraseña: <input type="password" placeHolder="Contraseña" name="passUser">
		<p><input type="submit" value="Registrar Autor"/></p>
	</form>

</body>
</html>