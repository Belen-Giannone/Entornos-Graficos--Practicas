<?php
session_start(); // Iniciar la sesión

// Guardar los valores enviados en variables de sesión
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave']   = $_POST['clave'];

echo "<p>Sesión creada correctamente.</p>";
echo "<p><a href='mostrar_sesion.php'>Ir a la página de bienvenida</a></p>";
?>
