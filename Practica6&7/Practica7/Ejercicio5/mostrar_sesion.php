<?php
session_start(); // Reanudar la sesión

if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "<h1>Bienvenido, {$_SESSION['usuario']}!</h1>";
    echo "<p>Tu clave almacenada en sesión es: {$_SESSION['clave']}</p>";
} else {
    echo "<p>No hay sesión activa. <a href='formulario.php'>Volver al login</a></p>";
}
?>
