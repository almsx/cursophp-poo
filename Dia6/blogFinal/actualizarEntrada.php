<?php 

include("seguridad.php"); 
include("../../utils/cnxdia3.php");
//print_r($_POST);


if (empty($_POST["pTituloNoticia"]) && empty($_POST["pCategoriaPublicacion"])  && empty($_POST["pContenidoCompleto"])  ){
    
    echo "No puedes actualizar esta noticia si no te logueas";
    echo "<br/>";
    echo "<a href=login.php>  Ir a Login</a>";
    
} else {

	$categoriaPublicacion = $_POST['pCategoriaPublicacion'];
	$noticiaCompleta = $_POST['pContenidoCompleto'];
	$idAutor = $_SESSION['idAutor'];
	$idNoticia = $_POST['pIdNoticia'];


	$queryInsert = "UPDATE Noticias SET idCategoria='$categoriaPublicacion', contenidoNoticia='$noticiaCompleta' WHERE idNoticia = $idNoticia";

	if(mysqli_query($dbcon, $queryInsert)){
    	
    	echo "Actualización correcta";
    	echo "<br/>";
    	echo "<a href='blog.php'>Ir al Administrador del Blog</a>";
	} else{
    	echo "Error en la consulta $queryInsert";
	}

}


?>