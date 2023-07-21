<?php
include("conexion.php");
$con=conectar();

$id_vent=$_POST['id_vent'];
$IdEmple3=$_POST['IdEmple3'];
$cant_prod_vent=$_POST['cant_prod_vent'];
$descuento_vent=$_POST['descuento_vent'];
$metodo_pago_vent=$_POST['metodo_pago_vent'];
$total_vent=$_POST['total_vent'];


$sql="INSERT INTO Venta VALUES('$id_vent','$IdEmple3','$cant_prod_vent','$descuento_vent,'$metodo_pago_vent','$total_vent')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: vista.php");    
}else {
}
?>