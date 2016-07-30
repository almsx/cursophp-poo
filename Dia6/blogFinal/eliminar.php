<?php 

include("seguridad.php"); 
include("../../utils/cnxdia3.php");
//print_r($_POST);

if (empty($_GET["id"])){
   
    echo "No puedes eliminar esta noticia si no envias el parametro de ID";
    echo "<br/>";
    echo "<a href=blog.php>  Ir a Administrador del Blog </a>";
    
} else {

	//$idNoticia = $_POST['pIdNoticia'];
	$idNoticia = $_REQUEST["id"];

	$queryInsert = "DELETE FROM Noticias WHERE idNoticia = $idNoticia";

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Eliminación correcta";
    	echo "<br/>";
    	echo "<a href='autores.php'>Ir al Administrador de Autores </a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}

}



?>