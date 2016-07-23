<?php 

//Para obtener un array de ejemplo de lo que envio
//desde otra pagina, lo obtengo de esta manera.
//print_r($_POST);

if (empty($_POST["pUsuario"]) && empty($_POST["pContra"])){
    
    echo "Vienen vacios o no iniciaste la sesión";
    echo "<br/>";
    echo "<a href=login.html>  Iniciar Sesion</a>";
    
} else {

	$usuario = $_POST['pUsuario'];
	$contras = $_POST['pContra'];

	//Cada dos puntos significa un nivel de carpeta
	//A subir para el usuario
	include("../../utils/cnxdia3.php");

	$view_users_query="SELECT idAutor, nombre, apellido FROM Autores WHERE usuario ='".$usuario."' AND password='".$contras."';"; 

	$run=mysqli_query($dbcon,$view_users_query);  

	$resultados = mysqli_num_rows($run);

	if($resultados !=0){
		
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
		echo "Usuario incorrecto, favor de verificar";
		echo "<br/>";
    	echo "<a href=login.html>  Iniciar Sesion</a>";

	}
}




?>