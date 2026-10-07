<?php

$conexion = mysqli_connect("localhost", "root", "", "Capitales");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>