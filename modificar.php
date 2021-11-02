<?php
include("conexion.php");
$id = $_GET['id'];

/*$p_apellido = $_POST['p_apellido'];
$s_apellido = $_POST['s_apellido'];
$tel = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion =$_POST['direccion'];
$update_clientes = "";*/
if(!empty($_POST['dinero_cuenta'])){
    $dinero =mysqli_real_escape_string($conexion,trim($_POST['dinero_cuenta']));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET dinero_cuenta = '$dinero' where id_cliente = '$id'");
}

if(!empty($_POST['nombre'])){
    $nombre =mysqli_real_escape_string($conexion,trim(strtoupper($_POST['nombre'])));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET nombre = '$nombre' where id_cliente = '$id'");
}
if(!empty($_POST['p_apellido'])){
    $p_apellido =mysqli_real_escape_string($conexion,trim(strtoupper($_POST['p_apellido'])));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET primer_apellido = '$p_apellido' where id_cliente = '$id'");
}
if(!empty($_POST['s_apellido'])){
    $s_apellido =mysqli_real_escape_string($conexion,trim(strtoupper($_POST['s_apellido'])));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET segundo_apellido = '$s_apellido' where id_cliente = '$id'");
}
if(!empty($_POST['telefono'])){
    $telefono =mysqli_real_escape_string($conexion,trim($_POST['telefono']));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET telefono = '$telefono' where id_cliente = '$id'");
}
if(!empty($_POST['correo'])){
    $correo =mysqli_real_escape_string($conexion,trim($_POST['correo']));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET correo = '$correo' where id_cliente = '$id'");
}

if(!empty($_POST['direccion'])){
    $direccion =mysqli_real_escape_string($conexion,trim(strtoupper($_POST['direccion'])));
    $update_clientes = mysqli_query($conexion,"UPDATE clientes SET direccion = '$direccion' where id_cliente = '$id'");
}

if(isset($_POST['btn_saldo'])){
    if(!empty($_POST['dinero'])){
        $dinero =mysqli_real_escape_string($conexion,trim($_POST['dinero']));
        $update_clientes = mysqli_query($conexion,"UPDATE clientes SET dinero_cuenta = dinero_cuenta +'$dinero' where id_cliente = '$id'");
    }
}
$recoge_clientes = mysqli_query($conexion,'SELECT * from clientes');


if(!empty($_POST['numero_cuenta'])){
    $numero_cuenta =mysqli_real_escape_string($conexion,trim($_POST['numero_cuenta']));
    $existe_numero_cuenta = false;
    while($fila = mysqli_fetch_array($recoge_clientes)){
        if($fila['numero_cuenta'] == $numero_cuenta){
       
            $existe_numero_cuenta = true;      
        }
    }
    if(strlen($numero_cuenta) == 5 && !$existe_numero_cuenta){
       
        $update_clientes = mysqli_query($conexion,"UPDATE clientes SET numero_cuenta = '$numero_cuenta' where id_cliente = '$id'");
    }
}

if(!empty($_POST['mo_dni'])){
    
    $existe_dni = false;
    
    $dni = mysqli_real_escape_string($conexion,trim(strtoupper($_POST['mo_dni'])));
    
    while($fila = mysqli_fetch_array($recoge_clientes)){
        if($fila['DNI']  == $dni){
            echo "dni existe";
            $existe_dni = true;      
        }
    }
    
    if(!$existe_dni){
        $update_clientes = mysqli_query($conexion,"UPDATE clientes SET DNI = '$dni' where id_cliente = '$id'");
    }
}


mysqli_close($conexion);
Header("Location: registro.php");

?>
