<?php

include("seguridad.php"); 
include("../../utils/cnxdia3.php");

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
?>

<meta charset="UTF-8">  
<h1>Actualizar Noticia</h1>

<?php echo "La noticia a actualizar es ".$_REQUEST["id"]?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<?php

	$noticiaObtener = $_REQUEST["id"];
	
	$view_users_query = "
	 		SELECT 
    		Noticias.idNoticia,
    		Noticias.tituloNoticia,
    		Noticias.contenidoNoticia,
    		Noticias.idCategoria, 
            Noticias.idAutor,
    		categorias.idCategoria,
    		categorias.tituloCategoria,
    		Autores.idAutor, 
    		Autores.nombre,
    		Autores.apellido
			FROM Noticias
			LEFT JOIN Autores ON Noticias.idAutor = Autores.idAutor
			LEFT JOIN categorias ON Noticias.idCategoria = categorias.idCategoria
			WHERE Noticias.idNoticia = $noticiaObtener            
			";


        $run=mysqli_query($dbcon,$view_users_query); 

        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $titulo = $row[1];
            //$autor = $row[9] . ' ' . $row[10];
            //$fechaPublicacion = $row[5];
            //$categoria = $row[7] 
            $contenidoCompleto = $row[2];
           
            
?>
	<form action="actualizarEntrada.php" method="POST">
		<input type="hidden" name="pIdNoticia" value="<?php echo $id; ?>"/>
		<br/>
		<input readonly type="text" placeHolder="Titulo de la Noticia" name="pTituloNoticia" value="<?php echo $titulo; ?>"/>
		<br/><br/>
		<select name="pCategoriaPublicacion">
		

			<?php

			$view_users_query="SELECT * from categorias ORDER BY tituloCategoria ASC"; 
	        $run2=mysqli_query($dbcon,$view_users_query);  
	        
	        while($row2=mysqli_fetch_array($run2)){
	        	
	        	if($row2['idCategoria'] == $row[3]) {
	        		echo'<OPTION VALUE="'.$row2['idCategoria'].'" selected>'.$row2['tituloCategoria'].'</OPTION>';
	        	} else {
					echo'<OPTION VALUE="'.$row2['idCategoria'].'" >'.$row2['tituloCategoria'].'</OPTION>';
				}
				

			}

			?>


		</select>
		<?php
	}
	?>
		<br/><br/>
		<!--input type="text" placeHolder="Texto de la noticia" name="pNoticia" value="<?php echo $contenidoCompleto; ?>"/-->
		<textarea name="pContenidoCompleto" rows="4" cols="50"><?php echo $contenidoCompleto; ?></textarea>
		<br/><br/>
		<input type="submit" value="Actualizar Noticia"/>
		<a href="blog.php"><input type="button" value="Cancelar"></a>
	</form>
</body>
</html>