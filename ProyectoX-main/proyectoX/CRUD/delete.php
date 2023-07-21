<?php

include("conexion.php");
$con=conectar();

$id_vent=$_GET['id'];

$sql="DELETE FROM Venta  WHERE id_vent='$id_vent'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vista.php");
    }
?>
