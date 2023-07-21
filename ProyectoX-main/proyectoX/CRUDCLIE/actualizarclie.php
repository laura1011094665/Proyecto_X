<?php 
    include("conexionclie.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM clientes WHERE client_id='$id'";
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
                    <form action="updateclie.php" method="POST">
                    
                                <input type="hidden" name="client_id" value="<?php echo $row['client_id']  ?>">
                                <input type="text" class="form-control mb-3" name="client_tipodo" placeholder="Tipo De Documento" value="<?php echo $row['client_tipodo']  ?>">
                                <input type="text" class="form-control mb-3" name="client_numerodoc" placeholder="Numero De Documento" value="<?php echo $row['client_numerodoc']  ?>">
                                <input type="text" class="form-control mb-3" name="client_nombre" placeholder="Nombre Cliente" value="<?php echo $row['client_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="client_apellido" placeholder="Apellido Cliente" value="<?php echo $row['client_apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="client_telefono" placeholder="Telefono Cliente" value="<?php echo $row['client_telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="client_direccion" placeholder="Direccion" value="<?php echo $row['client_direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="client_email" placeholder="Correo Electronico" value="<?php echo $row['client_email']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>