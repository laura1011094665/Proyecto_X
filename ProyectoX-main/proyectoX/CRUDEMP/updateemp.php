<?php

include("conexionemp.php");
$con=conectar();

$id_emple=$_POST["id_emple"];
$emple_tipodoc=$_POST['emple_tipodoc'];
$emple_numerodoc=$_POST['emple_numerodoc'];
$emple_nombre=$_POST['emple_nombre'];
$emple_apellido=$_POST['emple_apellido'];
$emple_cargo=$_POST['emple_cargo'];
$emple_direccion=$_POST['emple_direccion'];
$emple_email=$_POST['emple_email'];


$sql="UPDATE empleados SET  emple_tipodoc='$emple_tipodoc',emple_numerodoc='$emple_numerodoc',emple_nombre='$emple_nombre',emple_apellido='$emple_apellido',emple_cargo='$emple_cargo',emple_direccion='$emple_direccion',emple_email='$emple_email' WHERE id_emple='$id_emple'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaemp.php");
    }
?>