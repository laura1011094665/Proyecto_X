<?php 
    include("conexionemp.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE id_emple='$id'";
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
                    <form action="updateemp.php" method="POST">
                    
                                <input type="hidden" name="id_emple" value="<?php echo $row['id_emple']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_tipodoc" placeholder="Tipo De Documento" value="<?php echo $row['emple_tipodoc']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_numerodoc" placeholder="Numero De Documento" value="<?php echo $row['emple_numerodoc']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_nombre" placeholder="Nombre Empleado" value="<?php echo $row['emple_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_apellido" placeholder="Apellido Empleado" value="<?php echo $row['emple_apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_cargo" placeholder="Cargo Empleado" value="<?php echo $row['emple_cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_direccion" placeholder="Direccion" value="<?php echo $row['emple_direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="emple_email" placeholder="Correo Electronico" value="<?php echo $row['emple_email']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>