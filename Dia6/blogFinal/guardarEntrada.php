<?php 

include("seguridad.php"); 
include("../../utils/cnxdia3.php");
//print_r($_POST);

if (empty($_POST["pTituloNoticia"]) && empty($_POST["pCategoriaPublicacion"])  && empty($_POST["pNoticia"])  ){
    
    echo "No puedes insertar Noticias vacias";
    echo "<br/>";
    echo "<a href=blog.php>  Ir a Administrador del Blog</a>";
    
} else {

	//$usuario = $_POST['pUsuario'];
	//$contras = $_POST['pContra'];

	$tituloNoticia = $_POST['pTituloNoticia'];
	$categoriaPublicacion = $_POST['pCategoriaPublicacion'];
	$noticiaCompleta = $_POST['pContenidoCompleto'];
	$idAutor = $_SESSION['idAutor'];

	$queryInsert = "INSERT INTO Noticias (tituloNoticia,contenidoNoticia,idCategoria,idAutor) VALUES ('$tituloNoticia','$noticiaCompleta','$categoriaPublicacion','$idAutor');";
	

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Inserción correcta";
    	echo "<br/>";
    	echo "<a href='blog.php'>Ir al Administrador del Blog</a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}

}

?>