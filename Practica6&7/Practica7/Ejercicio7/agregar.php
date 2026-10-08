<?php

session_start();

// Verificar si se recibio el id del producto
if (isset($_GET["id"])) {

    $id = $_GET["id"];

    // Agregar el producto al carrito
    $_SESSION["carrito"][] = $id;
}

// Volver al catalogo
header("Location: catalogo.php");
exit;

?>