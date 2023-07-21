<?php 
    include("conexionemp.php");
    $con=conectar();

    $sql="SELECT *  FROM empleados";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Registro De Venta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertaremp.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_emple" placeholder="Codigo Empleado">
                                    <input type="text" class="form-control mb-3" name="emple_tipodoc" placeholder="Tipo Documento">
                                    <input type="text" class="form-control mb-3" name="emple_numerodoc" placeholder="Numero Documento">
                                    <input type="text" class="form-control mb-3" name="emple_nombre" placeholder="Nombre Empleado">
                                    <input type="text" class="form-control mb-3" name="emple_apellido" placeholder="Apellido Empleado">
                                    <input type="text" class="form-control mb-3" name="emple_cargo" placeholder="Cargo Empleado">
                                    <input type="text" class="form-control mb-3" name="emple_direccion" placeholder="Direccion Empleado">
                                    <input type="text" class="form-control mb-3" name="emple_email" placeholder="Correo Electronico">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo Empleado</th>
                                        <th>Tipo Documento</th>
                                        <th>Numero De Documento</th>
                                        <th>Nombre Empleado</th>
                                        <th>Apellido Empleado</th>
                                        <th>Cargo Empleado</th> 
                                        <th>Direccion Empleado</th> 
                                        <th>Correo Electronico Empleado</th>                                 
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_emple']?></th>
                                                <th><?php  echo $row['emple_tipodoc']?></th>
                                                <th><?php  echo $row['emple_numerodoc']?></th>
                                                <th><?php  echo $row['emple_nombre']?></th> 
                                                <th><?php  echo $row['emple_apellido']?></th>  
                                                <th><?php  echo $row['emple_cargo']?></th> 
                                                <th><?php  echo $row['emple_direccion']?></th>
                                                <th><?php  echo $row['emple_email']?></th>    
                                                <th><a href="actualizaremp.php?id=<?php echo $row['id_emple'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteemp.php?id=<?php echo $row['id_emple'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>