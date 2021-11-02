<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Banco Chantander</title>
</head>
<body>
    <!--BARRA-->
    <nav class="container-fluid nav-colores navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="text-white mx-auto navbar-brand" href="#">Chantander</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="text-white nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#clientes">Área administradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="registro.php">Añadir clientes</a>
                    </li>
                    <!--<li class="nav-item">
                    <a class="text-white nav-link disabled">Disabled</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div class="m-0 row justify-content-center">
        <div class="col-lg"></div>
        
        <!-- corousel-->
        <div class="col-lg-10">

            <div id="carouselExampleIndicators" class="container-fluid carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="css/fold1Nadal.png" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <div class="row">

                <!--AVISO LEGAL-->
                <div class="col-lg-6 container-fluid aviso-legal">
                        <div class="titulo">
                            <h3>Cuenta no remunerada:</h3>
                        </div>
                        <p>
                            1,- TIN 0% TAE 0% cumpliendo cualquiera de las condiciones para obtener la exención total (apartados 1, 2 o 3 de las Bases del Programa Santander One):,ejemplo bajo la opción de transaccionalidad (nómina y recibos/tarjetas). Para un supuesto en el que se mantenga de forma constante durante 1 año un saldo diario de 6.000€, aplicando un tipo de interés nominal anual de 0% y una comisión de mantenimiento de 0€. Además, lleva asociada la tarjeta Santander One Débito con una comisión de emisión y mantenimiento de la tarjeta de 0€.
                        </p>
                        <p>
                            2,- TIN 0% TAE -1,98% cumpliendo alguna de las condiciones de los apartados 4 o 5 de las Bases del Programa Santander One: ejemplo bajo la opción de mantener un saldo igual o superior a 5.000€ e inferior a 25.000€ en fondos de inversión, sin coste añadido. Para el mismo supuesto de saldo, tipo de interés y tarjeta y una comisión de mantenimiento de 120€/año(10€/mes) durante 1 año.
                        </p>
                        <p>
                            3,- TIN 0% TAE -3,93% si no se cumpliera ninguna de las condiciones: ejemplo para el mismo supuesto de saldo, tipo de interés y tarjeta y una comisión de mantenimiento de 240€/año(20€/mes) durante 1 año. La liquidación de la cuenta se realiza con periodicidad mensual.  
                        </p>
                        <p>
                            4.-Campaña Nomina:Para nuevas domiciliaciones de nómina o pensión por importe de al menos 600€/mes y una permanencia de 12 meses. La Bonificación Promocional constituye un rendimiento del capital mobiliario dinerario sujeto a la retención correspondiente conforme a la normativa fiscal aplicable (actualmente el 19%), que el Banco efectuará repercutiéndoselo al Participante y abonándole el resto, 81€. Promoción válida del 1 de Octubre al 31 de Diciembre 2021 prorrogable. Consulta condiciones de la promoción aquí.
                        </p>
                        <p>
                            Consulta la información contractual aquí
                        </p>
                        <p>
                            Consulta las Bases legales del Programa Santander One aquí.
                        </p>
                </div>
                <div class="aviso-ventajas col-lg-6">
                    <div class="titulo">
                        <h2>Y disfrutando siempre de estas ventajas:</h1>
                    </div>
                    <div class="separar-ventajas container-fluid row">

                        <div class="col-sm-3 d-flex justify-content-center">
                            <img width="65" height="65" src="css/sinComision.png">
                        </div>
                        <p class="col-sm-8">
                        Sin comisión de emisión ni mantenimiento en las tarjetas Santander One Débito, All-In-One Crédito y Aplaza Crédito. Ver más
                        </p>
                    </div>
                    
                    <div class="separar-ventajas container-fluid row">
                        <div class="col-sm-3 d-flex justify-content-center">
                            <img width="65" height="65" src="css/retiradaEfectivo.png">
                        </div>
                        <p class="col-sm-8">
                        Retirada de efectivo sin comisión en los más de 7.000 cajeros automáticos Santander en España, y 30.000 en el mundo con tu tarjeta Santander One Débito. 
                        </p>
                    </div>

                    <div class="separar-ventajas container-fluid row">
                        <div class="col-sm-3 d-flex justify-content-center">
                            <img width="65" height="65" src="css/sinComision.png">
                        </div>
                        <p class="col-sm-8 ">
                        Sin comisión por hacer transferencias en Euros desde nuestra banca online, móvil y cajeros automáticos, excepto urgentes. 
                        </p>
                    </div>

                    <div class="separar-ventajas container-fluid row">
                        <div class="col-sm-3 d-flex justify-content-center">
                            <img width="65" height="65" src="css/bizum.png">
                        </div>
                        <p class="col-sm-8">
                        Envío inmediato de dinero sin comisión a través de Bizum en la App Santander o nuestra banca online. 
                        </p>
                    </div>

                    <div class="separar-ventajas container-fluid row">
                        <div class="col-sm-3 d-flex justify-content-center">
                            <img width="65" height="65" src="css/accesoGratis.png">
                        </div>
                        <p class="col-sm-8">
                        Acceso gratuito a Santander ZOne, una plataforma única de descuentos, experiencias y ventajas exclusivas desde la App Santander. Consulta condiciones
                        </p>
                    </div>

                    
                </div>
                
            </div>

            <div class="row">
                <div class="col-lg-6" >
                    <div class="row">

                        <div class="col-sm-6">
                            <!--hola-->
                        </div>
                        <div class="col-sm-6" >
                            <!--hola-->
                        </div>
                    </div>
                    <!--hola largo-->
                </div>
                <div class="col-lg-6"  style="padding-top:2%;">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label id="clientes" for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6 d-flex justify-content-end" >
                            <button type="submit" class="btn btn-danger mb-3">Iniciar sesión</button>
                    </div>
                </div>
            </div>
        </div>

        
        
        <div class="col-lg"></div>
    
    </div> 



</body>
</html>

<?php

?>
