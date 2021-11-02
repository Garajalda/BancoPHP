<?php 
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleregistro.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Chantander</title>
</head>
<body>
    <!-- As a link -->
    <nav class="container-fluid nav-colores-registro navbar navbar-light bg-light">
    <div class="container-fluid ">
        <span class="logo">Chantander</span>
    </div>
    </nav>

    <div class=" container-fluid">
        <div class="progress " style="height: 10px;">
            <div id="myprogressBar" class="progress-bar bg-danger" role="progressbar" style="width: 0" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
    </div>
    
    
    <script>
    var width = 1;
    var limite = 11;
    function update() {
        var element = document.getElementById("myprogressBar");   
        var identity = setInterval(scene, 15);
        function scene() {
            if (width >= limite) {
                clearInterval(identity);
            } else {
                width++; 
                if(width <= 100){
                    
                    element.innerHTML=width + '%';
                }else{
                    element.innerHTML='100%';
                }
            element.style.width = width + '%'; 
        }
        
    }
    if(limite <= 100){
        
        limite += 10;
    }
    
        

    }
    </script>

    <div class="m-0 container-fluid row cabecera">
        
        <h4>Registro de clientes</h4>
        <p>*Acceso privado</p>
    </div>
    <div class="m-0 container-fluid row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
                <form method="post" action="" >

                    <!--nombre y apelllidos-->
                    <div class="row">
                        <div class="col-lg-4">
                            <!--nombre-->
                            <div class="mb-3 row">
                                
                                <div class="col-sm-12">
                                    <input onblur="update()" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['nombre'])){
                                            echo "<span>El campo nombre esta vacio</span>";
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
    
                        
                        <div class="col-lg-4">
                            <div class="mb-3 row">
                                
                                <div class="col-sm-12">
                                    <input onblur="update()" type="text" class="form-control" name="p_apellido" id="apellido1" value="<?php  ?>" placeholder="Primer Apellido">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['p_apellido'])){
                                            echo "<span>El campo primer apellido esta vacio.</span>";
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 row">
                                
                                <div class="col-sm-12">
                                    <input onblur="update()" type="text" class="form-control" name="s_apellido" id="apellido2" placeholder="Segundo Apellido">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['s_apellido'])){
                                            echo "<span>El campo segundo apellido esta vacio.</span>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Datos de contacto -->
    
                    <div class="row">
                        <div class="col-lg-6">
                            <!--nombre-->
                            <div class="mb-3 row">
                                
                                <div class="col-sm-12">
                                    <input onblur="update()" type="text" class="form-control" name="telefono" id="movil" placeholder="Móvil">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['telefono'])){
                                            echo "<span>El campo Móvil está vacío.</span>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
    
                        
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                
                                <div class="col-sm-12">
                                    <input onblur="update()" type="text" class="form-control" name="c_telefono" id="c_movil" placeholder="Confirma móvil">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['c_telefono'])){
                                            echo "<span>El campo móvil está vacío.</span>";
                                        }else{
                                            
                                            if($_POST['telefono'] != $_POST['c_telefono']){
                                                echo "<span>Los numeros de telefono deberán de ser iguales.</span>";
                                                
                                            }

                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 row">
                                
                                <div class="col-sm-12">
                                    <input onblur="update()" type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['email'])){
                                            echo "<span style='color: red;'>El campo Email está vacío.</span>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="mb-3 row">
                            
                            <div class="col-sm-12">
                                <input onblur="update()" type="text" class="form-control" name="c_email"id="c_email" placeholder="Confirma Email">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['email'])){
                                            
                                            echo "<span>El campo Confirma email está vacío.</span>";
                                        }else{
                                            
                                            if($_POST['email'] != $_POST['c_email']){
                                                
                                                echo "<span>Los campos email deberán de ser iguales</span>";
                                            }
                                        }
                                    }
                                    ?>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--Documento de identificacion nif-->
                <div class="row">
                    <div class="col-lg-4" >
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <input onblur="update()" type="text" class="form-control" name="dni" id="dni" placeholder="Ej 32916849X">
                                    <?php 
                                    $dni_existe = false;
                                    if(isset($_POST['btn_registro'])){
                                        if(empty($_POST['dni'])){
                                           
                                            echo "<span>El campo DNI está vacío.</span>";
                                        }
                                        $recoge_clientes = mysqli_query($conexion,'SELECT * from clientes');
                                        while($fila = mysqli_fetch_array($recoge_clientes)){
                                            if($fila['DNI'] == $_POST['dni']){
                                                echo "<span>Este DNI ya está registrado.</span>";
                                                $dni_existe = true;
                                            }else{
                                                $dni_existe = false;
                                            }
                                        }

                                        
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" >
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <input onblur="update()" type="text" class="form-control" name="direccion" id="direccion" placeholder="Avd Méndez Núñez, 22, 2ºC">
                                    <?php 
                                    if(isset($_POST['btn_registro'])){

                                        if(empty($_POST['direccion'])){
                                            echo "<span>El campo direccion está vacío.</span>";
                                        }
                                    }

                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3" >
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <script>
                                    function poneGenera(){
                                       var element = document.getElementById('num_cuenta');
                                       var numero_aleatorio = Math.floor(10000 + Math.random() * 90000);
                                       element.setAttribute('value',numero_aleatorio);
                                    }
                                </script>
                                <input onblur="update()" type="text" class="form-control" name="num_cuenta" id="num_cuenta" placeholder="53264">
                               
                                    <?php 
                                    if(isset($_POST['btn_registro'])){

                                        if(empty($_POST['num_cuenta'])){
                                            echo "<span>El campo numero de cuenta está vacío.</span>";
                                        }
                                        if(strlen($_POST['num_cuenta']) != 5){
                                            echo "<span>El campo numero de cuenta debe de ser 5 dígitos.</span>";
                                            $cuenta_error = true;
                                        }else{
                                            $cuenta_error = false;
                                        }
                                        $recoge_clientes = mysqli_query($conexion,'SELECT * from clientes');
                                        while($fila = mysqli_fetch_array($recoge_clientes)){
                                            if($fila['numero_cuenta'] == $_POST['num_cuenta']){
                                                echo "<span>Este numero de cuenta ya está registrado.</span>";
                                                $cuenta_existe = true;
                                            }else{
                                                $cuenta_existe = false;
                                            }
                                            
                                        }
                                    }

                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                            <button type="button" onclick="poneGenera()" id="btn_genera" class="btn btn-danger">CCC!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn_registro" class="btn btn-danger mb-3">Registrar</button>
                </form>
        </div>
        <div class="col-lg-2"></div>

    </div>

    <?php
    if(isset($_POST['btn_registro'])){
       
        if(!empty($_POST['nombre']) && !empty($_POST['p_apellido']) && !empty($_POST['s_apellido']) && !empty($_POST['direccion']) && !empty($_POST['num_cuenta'])){
            
            $nombre = mysqli_real_escape_string($conexion,trim(strtoupper($_POST['nombre'])));
            $p_apellido = mysqli_real_escape_string($conexion,trim(strtoupper($_POST['p_apellido'])));
            $s_apellido = mysqli_real_escape_string($conexion,trim(strtoupper($_POST['s_apellido'])));
            $tel =mysqli_real_escape_string($conexion,trim($_POST['telefono']));
            
            $email = mysqli_real_escape_string($conexion,trim($_POST['email']));
            $c_email = $_POST['c_email'];
            $dni = mysqli_real_escape_string($conexion,trim(strtoupper($_POST['dni'])));
            $direccion = mysqli_real_escape_string($conexion,trim(strtoupper($_POST['direccion'])));

            $cuenta = mysqli_real_escape_string($conexion,trim($_POST['num_cuenta']));
            
           
           
            
            if($_POST['email'] == $_POST['c_email'] && $_POST['telefono'] == $_POST['c_telefono'] && !$dni_existe && !$cuenta_existe && !$cuenta_error){
                
                $insertar = "INSERT INTO clientes (nombre,primer_apellido,segundo_apellido,DNI,telefono,correo,direccion,dinero_cuenta,numero_cuenta) values ('$nombre','$p_apellido','$s_apellido','$dni','$tel','$email','$direccion',0,$cuenta)";
                if(mysqli_query($conexion,$insertar)){
                    $mensaje = "<div class='row'><div class=' alert alert-success' role='alert'>Cliente registrado con exito</div>";
                    echo $mensaje;
                    $exito = true;
                    echo("<meta http-equiv='refresh' content='2'>");
                }
            }
            
        }    
        mysqli_close($conexion);      
    }
    
    ?>
    <!--TABLA-->
    <?php include("muestraClientes.php")?>
    <!--TABLA-->

    
</body>
</html>

