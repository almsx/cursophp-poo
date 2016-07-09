<?php 



if (empty($_POST["userBD"]) && empty($_POST["passBD"])){
    echo "Vienen vacios o no iniciaste la sesión";
    echo "<br/>";
    echo "<a href=login.html>  Iniciar Sesion</a>";
    
} else {

	$usuario = $_POST['userBD'];
	$contras = $_POST['passBD'];


	include("../utils/cnxdia3.php");

	$view_users_query="SELECT idAutor, nombre, apellido FROM Autores WHERE usuario ='".$usuario."' AND password='".$contras."';"; 

	$run=mysqli_query($dbcon,$view_users_query);  

	$filas = mysqli_num_rows($run);

	if($filas !=0){
		
		session_start();
		
		while($row=mysqli_fetch_array($run)) {  
			$idUsuario=$row[0];
 			$nombre=$row[1];  
     		$apellido=$row[2];  
             
   			echo $nombre.' '.$apellido;
   			$nameCompleto = $nombre.' '.$apellido;
   			$_SESSION['nombreApp'] = $nameCompleto;
   			$_SESSION['idAutor'] = $idUsuario;

 		}

		header("Location: panel.php");

	} else {
		echo "Usuario no existe, favor de verificar";
		echo "<br/>";
    	echo "<a href=login.html>  Iniciar Sesion</a>";

	}
}






?>