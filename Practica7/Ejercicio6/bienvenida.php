<?php
session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h1>Bienvenido, {$_SESSION['nombre']}!</h1>";
} else {
    echo "<p>No puede visitar esta página sin iniciar sesión.</p>";
    echo "<p><a href='formulario.php'>Volver al formulario</a></p>";
}
?>
