<?php
function conectar() {
    $mysqliconnect = new mysqli("localhost", "root", "", "proyectox");
    if ($mysqliconnect->connect_errno) {
        echo "Error al conectar la base de datos: " . $mysqliconnect->connect_error;
        exit();
    }
    return $mysqliconnect;
}
?>

