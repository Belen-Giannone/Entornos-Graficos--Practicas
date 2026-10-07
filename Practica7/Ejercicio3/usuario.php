<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Cookie de Usuario</title>
</head>
<body>
    <h1>Ejercicio 3 - Práctica 7</h1>

    <?php
    // Si se envió el formulario, crear o actualizar la cookie
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        setcookie('usuario', $nombre, time() + (60 * 60 * 24 * 30)); // válida por 30 días
        echo "<p>Cookie creada para el usuario: <strong>$nombre</strong></p>";
    }

    // Mostrar el último nombre guardado si existe la cookie
    if (isset($_COOKIE['usuario'])) {
        echo "<p>Bienvenido nuevamente, <strong>{$_COOKIE['usuario']}</strong>.</p>";
    } else {
        echo "<p>Bienvenido por primera vez. Ingresá tu nombre:</p>";
    }
    ?>

    <form action="usuario.php" method="post">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Guardar nombre">
    </form>
</body>
</html>
