<?php

include("conexionemp.php");
$con=conectar();

$id_emple=$_GET['id'];

$sql="DELETE FROM empleados  WHERE id_emple='$id_emple'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaemp.php");
    }
?>
