<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Ventas WHERE id_vent='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_vent" value="<?php echo $row['id_vent']  ?>">
                                <input type="text" class="form-control mb-3" name="IdEmple3" placeholder="Id Empleado" value="<?php echo $row['IdEmple3']  ?>">
                                <input type="text" class="form-control mb-3" name="cant_prod_vent" placeholder="Cantidad De Productos Venta" value="<?php echo $row['cant_prod_vent']  ?>">
                                <input type="text" class="form-control mb-3" name="descuento_vent" placeholder="Descuento" value="<?php echo $row['descuento_vent']  ?>">
                                <input type="text" class="form-control mb-3" name="metodo_pago_vent" placeholder="Ingrese El Metodo De Pago" value="<?php echo $row['metodo_pago_vent']  ?>">
                                <input type="text" class="form-control mb-3" name="total_vent" placeholder="Total De La Venta" value="<?php echo $row['total_vent']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>