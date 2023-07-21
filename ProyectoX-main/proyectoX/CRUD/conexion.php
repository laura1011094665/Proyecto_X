<?php
$mysqliconnect = new mysqli("localhost", "root", "12345678", "proyectox");
if ($mysqliconnect->connect_errno) {
    echo "Error al conectar la base de datos: " . $mysqliconnect->connect_error;
    exit();
}   


$IdEmple3=$_POST['IdEmple3'];
$cant_prod_vent=$_POST['cant_prod_vent'];
$descuento_vent=$_POST['descuento_vent'];
$metodo_pago_vent=$_POST['metodo_pago_vent'];
$total_vent=$_POST['total_vent'];


$insertar="INSERT INTO Venta VALUES(null,'$IdEmple3','$cant_prod_vent','$descuento_vent','$metodo_pago_vent','$total_vent')";

   $resultado = $mysqliconnect->query("SELECT * FROM Venta");
   $resultado = $mysqliconnect->query($insertar);

   if($resultado){
    echo "Datos agregados";
   }else{
    echo "Error al guardar los datos";
   }

   mysqli_close($mysqliconnect);
?>
