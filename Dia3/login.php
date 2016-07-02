<?php 

$usuario = $_POST['userBD'];
$contras = $_POST['passBD'];


include("../utils/cnxdia3.php");

$view_users_query="SELECT idAutor, nombre, apellido FROM Autores WHERE usuario ='".$usuario."' AND password='".$contras."';"; 

$run=mysqli_query($dbcon,$view_users_query);  
  
while($row=mysqli_fetch_array($run)) {  
	$nombre=$row[1];  
    $apellido=$row[2];  
            
  	echo $nombre.' '.$apellido;  
}





?>