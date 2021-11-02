<?php
include("conexion.php");
$id = $_GET['id'];
$borrar = "DELETE FROM clientes WHERE id_cliente = '$id'";

if(mysqli_query($conexion,$borrar)){
    Header("Location: registro.php");
}
mysqli_close($conexion);

?>