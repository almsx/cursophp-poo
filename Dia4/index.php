<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos a mi Blog</title>
</head>
<body>
	<h1>Bienvenidos al Blog del Curso de PHP</h1>
	<a href="../Dia3/login.html">Ingresar al Admin de Blog</a>
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
            Noticias.idAutor,
    		Noticias.fechaPublicacion, 
    		categorias.idCategoria,
    		categorias.tituloCategoria,
    		Autores.idAutor, 
    		Autores.nombre,
    		Autores.apellido
			FROM Noticias
			LEFT JOIN Autores ON Noticias.idAutor = Autores.idAutor
			LEFT JOIN categorias ON Noticias.idCategoria = categorias.idCategoria
			ORDER BY Noticias.fechaPublicacion DESC
            
			";
        
        	$run=mysqli_query($dbcon,$view_users_query);  
  
        	while($row=mysqli_fetch_array($run)) { 
        		$autor = $row[9] . ' ' . $row[10]; 
        		?>

        		<h1><?php echo $row[1]; ?></h1>
        		<h3><?php echo "Publicado por ".$autor . " el Día " . $row[5]; ?></h3>
        		<br/>
        		<?php echo $row[2]; ?>
        		<br/>
        		<br/>
        		<?php echo "Escrito para la Redacción de: " . $row[7]  ?> 

            	
            	
            
  
  
        	<?php } 
	?>
	
</body>
</html>