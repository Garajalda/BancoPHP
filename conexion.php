<?php 
    $conexion = new mysqli("localhost","[user]","[contrasena]","[bbdd]");
    if($conexion->connect_errno){
        echo "Fallo";
    }
?>
