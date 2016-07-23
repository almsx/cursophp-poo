<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador de Autores</title>
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
	echo "<a href=panel.php>Regresar a Panel</a> | <a href=nuevoAutor.php>Nuevo Autor</a>";
	?>
	
<div class="table-scrol">  
<div class="table-responsive">
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>
        <tr>  
            <th>ID</th>
            <th>Nombre</th>  
            <th>Apellido Paterno</th>  
            <th>Aepllido Materno</th> 
            <th>Usuario</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>  
        </thead>  
  
        <?php  
        
        
		$view_users_query = "
	 		SELECT * from Autores            
			";


        $run=mysqli_query($dbcon,$view_users_query); 
       
  
        while($row=mysqli_fetch_array($run))  
        {  
            $id = $row[0];
            $nombre = $row[1];
            $apaterno = $row[2];
            $amaterno = $row[3];
            $usuario = $row[4] 
           
            
        ?>  
  
        <tr>  

            <td><?php echo $id;  ?></td>
            <td><?php echo $nombre;  ?></td>
            <td><?php echo $apaterno;  ?></td>  
            <td><?php echo $amaterno;  ?></td>  
            <td><?php echo $usuario;  ?></td>
            <td><a href=editarAutor.php?acccion=update&id=<?php echo $id; ?>>Actualizar</a></td> 
            <td><a href=editarAutor.php?acccion=delete&id=<?php echo $id; ?>><img src="img/recycle-bin.png" width="30px" height="30px"></a></td> 
            


            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  

</body>
</html>