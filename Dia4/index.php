<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos a mi Blog</title>
</head>
<body>
	<h1>Bienvenidos al Blog del Curso de PHP</h1>
	<a href="admin.php">Ingresar al Admin de Blog</a>
	<br/>
	<br/>
	<h1>Noticias</h1>

	<?php
	 	include("../utils/cnxdia3.php");
        
        $view_users_query = "
	 		SELECT 
    		Noticias.idNoticia,
    		Noticias.tituloNoticia,
    		Noticias.contenidoNoticia,
    		Noticias.idCategoria, 
    		Noticias.fechaPublicacionCompleta, 
    		Noticias.usuarioPublica,
    		Noticias.categoriaPublica,
    		categoriasBlog.idCategoria,
    		categoriasBlog.nombreCategoria,
    		usuariosBlog.idUsuario, 
    		usuariosBlog.nombres,
    		usuariosBlog.pais,
    		usuariosBlog.apPaterno,
    		usuariosBlog.apMaterno
			FROM noticiasBlog
			LEFT JOIN usuariosBlog ON noticiasBlog.usuarioPublica = usuariosBlog.idUsuario 
			LEFT JOIN categoriasBlog ON noticiasBlog.categoriaPublica = categoriasBlog.idCategoria
			ORDER BY noticiasBlog.fechaPublicacion DESC
			";
        
        	$run=mysqli_query($dbcon,$view_users_query);  
  
        	while($row=mysqli_fetch_array($run)) { 
        		$autor = $row[11] . ' ' . $row[13] . '  ' . $row[14]; 
        		?>

        		<h1><?php echo $row[2]; ?></h1>
        		<h3><?php echo "Publicado por ".$autor . " el Día " . $row[1]; ?></h3>
        		<br/>
        		<?php echo $row[4]; ?>
        		<br/>
        		<br/>
        		<?php echo "Escrito en su computadora desde ".$row[12] . " para la Redacción de: " . $row[9] . " <a href='comentarios.php'> Comentarios</a>"; ?> 

            	
            	
            
  
  
        	<?php } 
	?>
	
</body>
</html>