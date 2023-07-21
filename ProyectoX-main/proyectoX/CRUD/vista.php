<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM Venta";
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
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_vent" placeholder="Codigo Venta">
                                    <input type="text" class="form-control mb-3" name="IdEmple3" placeholder="Codigo Empleado">
                                    <input type="text" class="form-control mb-3" name="cant_prod_vent" placeholder="Cantidad De Productos">
                                    <input type="text" class="form-control mb-3" name="descuento_vent" placeholder="Descuento">
                                    <input type="text" class="form-control mb-3" name="metodo_pago_vent" placeholder="Ingresar Metodo De Pago">
                                    <input type="text" class="form-control mb-3" name="total_vent" placeholder="Total De La Venta">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo Venta</th>
                                        <th>Codigo Empleado</th>
                                        <th>Cantidad De Producto</th>
                                        <th>Descuento</th>
                                        <th>Metodo De Pago</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_vent']?></th>
                                                <th><?php  echo $row['IdEmple3']?></th>
                                                <th><?php  echo $row['cant_prod_vent']?></th>
                                                <th><?php  echo $row['descuento_vent']?></th> 
                                                <th><?php  echo $row['metodo_pago_vent']?></th>  
                                                <th><?php  echo $row['total_vent']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_vent'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_vent'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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