<?php

//Reanudamos la sesión 
session_start(); 

//Validamos si existe realmente una sesión activa o no 
if(isset($_SESSION['nombreApp'])){ 
	
	
	session_start();
	session_destroy();
	header("Location: panel.php"); 
	exit();
  
} else {
	header("Location: index.php"); 
	exit();

}

?>