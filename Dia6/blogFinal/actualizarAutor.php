<?php 

include("seguridad.php"); 
include("../../utils/cnxdia3.php");
//print_r($_POST);


if (empty($_POST["idUser"]) && empty($_POST["naUser"])  && empty($_POST["apUser"]) && empty($_POST["usUser"]) && empty($_POST["paUser"])  ){
    
    echo "No puedes actualizar este autor si no te logueas";
    echo "<br/>";
    echo "<a href=login.php>  Ir a Login</a>";
    
} else {

	$idUsuario = $_POST['idUser'];
	$nombreUsuario = $_POST['naUser'];
	$apellidoUsuario = $_POST['apUser'];
	$usuarioUsuario = $_POST['usUser'];
	$passwordUsuario = $_POST['paUser'];


	$queryInsert = "UPDATE Autores SET nombre='$nombreUsuario', apellido='$apellidoUsuario', usuario = '$usuarioUsuario', password = '$passwordUsuario' WHERE idAutor = $idUsuario";

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Actualización correcta";
    	echo "<br/>";
    	echo "<a href='blog.php'>Ir al Administrador de Autores</a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}

}


?>