<?php
include("conexionclie.php");
$mysqliconnect = conectar();

$client_tipodo = $_POST['client_tipodo'];
$client_numerodoc = $_POST['client_numerodoc'];
$client_nombre = $_POST['client_nombre'];
$client_apellido = $_POST['client_apellido'];
$client_telefono = $_POST['client_telefono'];
$client_direccion = $_POST['client_direccion'];
$client_email = $_POST['client_email'];

$insertar = "INSERT INTO clientes VALUES(null,
'$client_tipodo',
'$client_numerodoc',
'$client_nombre',
'$client_apellido',
'$client_telefono',
'$client_direccion',
'$client_email')";

$resultado = $mysqliconnect->query($insertar);

if ($resultado) {
    echo "Datos agregados";
    Header("Location: vistaclie.php");
} else {
    echo "Error al guardar los datos";
}
?>
