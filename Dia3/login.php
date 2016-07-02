<?php 



if (empty($_POST["userBD"]) && empty($_POST["passBD"])){
    echo "Vienen vacios o no iniciaste la sesión";
    echo "<br/>";
    echo "<a href=login.html>  Iniciar Sesion</a>";
    
} else {

	//header("Location: panel.php");
	//echo "Si iniciaste sesion";

	$usuario = $_POST['userBD'];
	$contras = $_POST['passBD'];


	include("../utils/cnxdia3.php");

	$view_users_query="SELECT idAutor, nombre, apellido FROM Autores WHERE usuario ='".$usuario."' AND password='".$contras."';"; 

	$run=mysqli_query($dbcon,$view_users_query);  

	$filas = mysqli_num_rows($run);

	//echo 'Hay '.$filas.' resultados';

	if($filas !=0){
		
		header("Location: panel.php");

	} else {
		echo "Usuario no existe, favor de verificar";
		echo "<br/>";
    	echo "<a href=login.html>  Iniciar Sesion</a>";

	}
}






?>