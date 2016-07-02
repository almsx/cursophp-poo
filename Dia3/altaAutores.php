<?php 

if (empty($_POST["nameUser"]) && empty($_POST["apeUser"]) && empty($_POST["userUser"]) && empty($_POST["passUser"])){
    
    echo "Vienen vacios o no iniciaste la sesión";
    echo "<br/>";
    echo "<a href=login.html>  Iniciar Sesion</a>";
    
} else {

	
	$nameUsuario = $_POST['nameUser'];
	$lastUsuario = $_POST['apeUser'];
	$userUsuario = $_POST['userUser'];
	$passUsuario = $_POST['passUser'];


	include("../utils/cnxdia3.php");

	$queryInsert = "INSERT INTO Autores (nombre,apellido,usuario,password) VALUES ('$nameUsuario','$lastUsuario','$userUsuario','$passUsuario');";
	

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Insersión correcta";
    	echo "<br/>";
    	echo "<a href='panel.php'>Ir al Administrador del Blog</a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}
}

?>