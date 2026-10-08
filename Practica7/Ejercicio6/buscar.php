<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "base") 
    or die("Error de conexión");

$mail = $_POST['mail'];

$consulta = "SELECT nombre FROM alumnos WHERE mail='$mail'";
$resultado = mysqli_query($conexion, $consulta);

if ($fila = mysqli_fetch_assoc($resultado)) {
    $_SESSION['nombre'] = $fila['nombre'];
    echo "<p>Sesión creada para el alumno: {$_SESSION['nombre']}</p>";
    echo "<p><a href='bienvenida.php'>Ir a la página de bienvenida</a></p>";
} else {
    echo "<p>No existe un alumno con ese mail.</p>";
    echo "<p><a href='formulario.php'>Volver al formulario</a></p>";
}

mysqli_close($conexion);
?>
