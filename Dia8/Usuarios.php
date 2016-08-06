<?php
        require_once ("ClaseBaseDeDatos.php");

        $connection = new Base();

        $connection->connect("127.0.0.1", "root", "", "Clase3POO");
        $myquery = "SELECT * FROM Autores";
        $query = $connection->query($myquery);
        echo $myquery; 

        
        while($array = $connection->fetch($query))
        {
            echo $array['nombre'] . '<br />';
            //echo $array['apellido'] . '<br />';                
        }
        
        //$connection->close();
?>