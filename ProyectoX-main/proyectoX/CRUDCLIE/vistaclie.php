<?php 
    include("conexionclie.php");
    $con = conectar();

    $sql = "SELECT * FROM clientes";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro De Clientes</title>
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
                <form action="insertarclie.php" method="POST">
                <input type="text" class="form-control mb-3" name="client_id" placeholder="Id">
                    <input type="text" class="form-control mb-3" name="client_tipodo" placeholder="Tipo Documento">
                    <input type="text" class="form-control mb-3" name="client_numerodoc" placeholder="Numero Documento">
                    <input type="text" class="form-control mb-3" name="client_nombre" placeholder="Nombre Cliente">
                    <input type="text" class="form-control mb-3" name="client_apellido" placeholder="Apellido Cliente">
                    <input type="text" class="form-control mb-3" name="client_telefono" placeholder="Telefono">
                    <input type="text" class="form-control mb-3" name="client_direccion" placeholder="Direccion Cliente">
                    <input type="text" class="form-control mb-3" name="client_email" placeholder="Correo Electronico">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                        <th>Id Cliente</th>
                            <th>Tipo Documento</th>
                            <th>Numero De Documento</th>
                            <th>Nombre Cliente</th>
                            <th>Apellido Cliente</th>
                            <th>Telefono</th>
                            <th>Direccion Cliente</th> 
                            <th>Correo Electronico</th>                                 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                        <th><?php echo $row['client_id']; ?></th>
                            <th><?php echo $row['client_tipodo']; ?></th>
                            <th><?php echo $row['client_numerodoc']; ?></th>
                            <th><?php echo $row['client_nombre']; ?></th> 
                            <th><?php echo $row['client_apellido']; ?></th> 
                            <th><?php echo $row['client_telefono']; ?></th> 
                            <th><?php echo $row['client_direccion']; ?></th>   
                                                <th><a href="actualizarclie.php?id=<?php echo $row['client_id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleteclie.php?id=<?php echo $row['client_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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