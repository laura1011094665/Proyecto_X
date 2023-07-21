<?php

include("conexionclie.php");
$con=conectar();

$client_id=$_GET['id'];

$sql="DELETE FROM clientes WHERE client_id='$client_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaclie.php");
    }
?>
