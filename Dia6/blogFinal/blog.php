<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Blog</title>
</head>
<meta charset="UTF-8">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<body>
	<?php
    include("seguridad.php"); 
    include("../../utils/cnxdia3.php");
	//session_start();
	echo "Bienvenido al Administrador del Blog, ".$_SESSION['nombreApp']. " <a href=logout.php>Cerrar Sesión</a>";
	echo "<br/><br/>";
	echo "<a href=panel.php>Regresar a Panel</a> | <a href=nuevaEntrada.php>Nueva Entrada en Blog</a>";
	?>
	
<div class="table-scrol">  
<div class="table-responsive">
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>
        <tr>  
            <th>ID</th>
            <th>Titulo Noticia</th>  
            <th>Autor</th>  
            <th>Fecha Publicación</th> 
            <th>Categoría</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
            <th>Boton</th>
        </tr>  
        </thead>  
  
        <?php  
        
        
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
       
  
        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $titulo = $row[1];
            $autor = $row[9] . ' ' . $row[10];
            $fechaPublicacion = $row[5];
            $categoria = $row[7] 
           
            
        ?>  
  
        <tr>  

            <td><?php echo $id;  ?></td>
            <td><?php echo $titulo;  ?></td>
            <td><?php echo $autor;  ?></td>  
            <td><?php echo $fechaPublicacion;  ?></td>  
            <td><?php echo $categoria;  ?></td>
            <td><a href=actualizar.php?id=<?php echo $id; ?>>Actualizar</a></td> 
            <td><a href=eliminar.php?id=<?php echo $id; ?>><img src="img/recycle-bin.png" width="30px" height="30px"></a></td> 
            <td><a href=actualizar.php?id=<?php echo $id; ?>><input type="button" value="Actualizar Btn"></a></td> 
            


            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  

</body>
</html>