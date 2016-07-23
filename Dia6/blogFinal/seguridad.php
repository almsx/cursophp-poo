<?php 

//Reanudamos la sesión 
session_start(); 

//Validamos si existe realmente una sesión activa o no 
if($_SESSION["nombreApp"] != ""){ 
  
} else {
	//Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
	//header("Location: login.html"); 
  	//exit();
  	echo "Esta sección no esta autorizada para verla si no te autentificas";
  	echo "<br/>";
   	echo "<a href=login.html>  Iniciar Sesion</a>"; 
}

?>