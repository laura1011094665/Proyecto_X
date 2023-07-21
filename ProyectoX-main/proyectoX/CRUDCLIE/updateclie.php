<?php

include("conexionclie.php");
$con=conectar();

$client_id=$_POST['client_id'];
$client_tipodo=$_POST['client_tipodo'];
$client_numerodoc=$_POST['client_numerodoc'];
$client_nombre=$_POST['client_nombre'];
$client_apellido=$_POST['client_apellido'];
$client_telefono=$_POST['client_telefono'];
$client_direccion=$_POST['client_direccion'];
$client_email=$_POST['client_email'];


$sql="UPDATE clientes SET  client_tipodo='$client_tipodo', client_numerodoc='$client_numerodoc',client_nombre='$client_nombre',client_apellido='$client_apellido',client_telefono='$client_telefono',client_direccion='$client_direccion',client_email='$client_email' WHERE client_id='$client_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaclie.php");
    }
?>