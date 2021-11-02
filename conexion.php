<?php 
    $conexion = new mysqli("localhost","root","","chantander");
    if($conexion->connect_errno){
        echo "Fallo";
    }
?>