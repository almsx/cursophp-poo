<?php 

session_start();

echo "Bienvenido al Administrador del Blog ".$_SESSION['nombreApp']. "<a href=logout.php>Cerrar Sesión</a>";



?>