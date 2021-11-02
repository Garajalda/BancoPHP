<?php
include("conexion.php");
$recoge_clientes = mysqli_query($conexion,'SELECT * from clientes');
?>

<div class="m-0 container-fluid row">
        <div class="col-lg-12 table-responsive text-nowrap">

            <table class="table table-hover border-danger">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Primer apellido</th>
                        <th scope="col">Segundo apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Móvil</th>
                        <th scope="col">Email</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">Cuenta Bancaria</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <script>
                            
                            var inputs = document.getElementsByClassName("saldo");
                            window.onload=function(){

                                for(var i = 0; i < inputs.length; i++){
    
                                    
                                    inputs[i].setAttribute('readonly',true);
                                }
                                
                                var indice = 0;
                                document.querySelectorAll('.saldo').forEach((inputs, index) => {
                                    
                                    inputs.ondblclick = () => {
                                        inputs.removeAttribute('readonly');
                                        
                                    };
                                    inputs.onblur = () =>{
                                        inputs.setAttribute('readonly',true);
                                    }
                                });    
                            }
                                  
                    </script>

                    <?php while($row = $recoge_clientes->fetch_assoc()){?>

                        <tr>
                            <th><?php echo $row['id_cliente']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['primer_apellido']; ?></td>
                            <td><?php echo $row['segundo_apellido']; ?></td>
                            <td><?php echo $row['DNI']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>

                            <form action="modificar.php?id=<?php echo $row['id_cliente']?>" method="post">
                            <?php if($row['dinero_cuenta'] > -1){?>
                                <td><input name="dinero" style="color: green" class="form-control saldo" type="text" value="<?php echo $row['dinero_cuenta'];?>"></td>
                            <?php }else{?>
                                <td><input name="dinero" style="color: red;" class="form-control saldo" type="text" value="<?php echo $row['dinero_cuenta'];?>"></td>
                                <?php }?>
                                <input hidden type="submit" name="btn_saldo">
                            </form>
                            <td><?php echo $row['numero_cuenta']; ?></td>
                            <td><a style="margin-right: 5%;" href="borrar.php?id=<?php echo $row['id_cliente']?>" class="btn btn-danger">Eliminar</a><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $row['id_cliente']?>">
                                Modificar</button></td>
                            
                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="Modal<?php echo $row['id_cliente']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="margin-right: 7%;" class="modal-title" id="exampleModalLabel"><?php echo "ID: ".$row['id_cliente'];?></h5>
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['nombre']." ".$row['primer_apellido']." ".$row['segundo_apellido']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="modificar.php?id=<?php echo $row['id_cliente']?>">
                            <div class="modal-body">
                                <style>.modalEdit{margin-bottom: 3%}</style>
                                    <input type="text" class="modalEdit form-control" name="nombre" placeholder="Nombre" id="nombre">
                                    <input type="text" class="modalEdit form-control" name="p_apellido" placeholder="Primer apellido">
                                    <input type="text" class="modalEdit form-control" name="s_apellido" placeholder="Segundo apellido">
                                    <input type="text" class="modalEdit form-control" name="telefono" placeholder="Móvil">
                                    <input type="text" class="modalEdit form-control" name="correo" placeholder="Email">
                                    <input type="text" class="modalEdit form-control" name="direccion" placeholder="Dirección">
                                    <input type="text" class="modalEdit form-control" name="dinero_cuenta"  placeholder="Modificar saldo">
                                    <input type="text" class="modalEdit form-control" name="numero_cuenta"  placeholder="Modificar cuenta">
                                    
                                    <input type="text" class="modalEdit form-control" name="mo_dni"  placeholder="Modificar DNI">
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    
                                    <input type="submit" class="btn btn-warning" value="Modificar">
                                </div>
                            </div>
                            </form>
                        </div>
                        </div>
                    <!--modal-->
                        
                    <?php }?>
                    
                </tbody>
            </table>
        </div>

        


    </div>
   