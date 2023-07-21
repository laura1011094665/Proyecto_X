<?php
include("conexionemp.php");
$mysqliconnect = conectar();

$emple_tipodoc = $_POST['emple_tipodoc'];
$emple_numerodoc = $_POST['emple_numerodoc'];
$emple_nombre = $_POST['emple_nombre'];
$emple_apellido = $_POST['emple_apellido'];
$emple_cargo = $_POST['emple_cargo'];
$emple_direccion = $_POST['emple_direccion'];
$emple_email = $_POST['emple_email'];

$insertar = "INSERT INTO empleados VALUES(null,
'$emple_tipodoc',
'$emple_numerodoc',
'$emple_nombre',
'$emple_apellido',
'$emple_cargo',
'$emple_direccion',
'$emple_email')";

$resultado = $mysqliconnect->query($insertar);

if ($resultado) {
    echo "Datos agregados";
    Header("Location: vistaemp.php");
} else {
    echo "Error al guardar los datos";
}
?>
