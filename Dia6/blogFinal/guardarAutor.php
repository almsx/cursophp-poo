<?php 

include("seguridad.php"); 
include("../../utils/cnxdia3.php");
//print_r($_POST);

if (empty($_POST["pAutorNombre"]) && empty($_POST["pAutorAPaterno"])  && empty($_POST["pAutorAMaterno"])  && empty($_POST["pAutorUsuario"]) && empty($_POST["pAutorContra"])){
    
    echo "No puedes insertar Autores vacios";
    echo "<br/>";
    echo "<a href=autores.php>  Ir a Administrador de Autores</a>";
    
} else {

	
	$nameUser = $_POST['pAutorNombre'];
	$apUser = $_POST['pAutorAPaterno'];
	$amUser = $_POST['pAutorAMaterno'];
	$usuarioUser = $_POST['pAutorUsuario'];
	$passUser = $_POST['pAutorUsuario'];

	$queryInsert = "INSERT INTO Autores (nombre,apellido,usuario,password) VALUES ('$nameUser','$apUser','$usuarioUser','$passUser');";
	

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Inserción correcta";
    	echo "<br/>";
    	echo "<a href='autores.php'>Ir al Administrador de Autores</a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}

}

?>