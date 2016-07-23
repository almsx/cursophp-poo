<?php 

include("seguridad.php"); 
include("../../utils/cnxdia3.php");
//print_r($_POST);

if (empty($_GET["id"]) && empty($_GET["acccion"])){
   
    echo "No puedes eliminar este autor si no envias el parametro de ID";
    echo "<br/>";
    echo "<a href=autores.php>  Ir a Administrador del Blog </a>";
    
} else {

	if($_GET['acccion'] == 'update'){
		//Todo el formulario para actualizar
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Entrada</title>
</head>
<body>

<?php


	echo "Bienvenido al Administrador del Blog, ".$_SESSION['nombreApp']. " <a href=logout.php>Cerrar Sesión</a>";

	echo "<br/><br/>";
	echo "<a href=blog.php>Regresar a Blog</a>";

	$AutorObtenido = $_REQUEST["id"];
	
	$view_users_query = "
	 		SELECT * FROM Autores WHERE idAutor = $AutorObtenido;";


        $run=mysqli_query($dbcon,$view_users_query); 

        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $nombre = $row[1];
            $apellido = $row[2];
            $usuario = $row[3];
            $password = $row[4];

            
           

?>

<form action="actualizarAutor.php" method="POST"> 
	<input type="text" name="idUser" value="<?php echo "$id"; ?>" />
	<input type="text" name="naUser" value="<?php echo "$nombre"; ?>"/>
	<input type="text" name="apUser" value="<?php echo "$apellido"; ?>"/>
	<input type="text" name="usUser" value="<?php echo "$usuario"; ?>"/>
	<input type="text" name="paUser" value="<?php echo "$password"; ?>"/>
	<input type="submit" value="actualizar autor"/>
</form>
<?php

}}
 else {

 	//echo "eliminare este usuario";

 	//$idNoticia = $_POST['pIdNoticia'];
	$idAutor = $_REQUEST["id"];

	$queryInsert = "DELETE FROM Autores WHERE idAutor = $idAutor";

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Eliminación correcta";
    	echo "<br/>";
    	echo "<a href='autores.php'>Ir al Administrador de  los Autores</a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}

 
 }


}

?>