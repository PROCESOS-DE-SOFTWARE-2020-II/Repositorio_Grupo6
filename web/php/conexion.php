<?php
    try {
        $conexion = new PDO('mysql:host=localhost; dbname=tareasajax', 'root', '');
    }catch(Exception $e){
        echo "error: ". $e->getMessage();
    }


?>