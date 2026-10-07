<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Periódico</title>
</head>
<body>
    <h1>Periódico Online</h1>

    <?php
    // Verificar si existe la cookie
    if (isset($_COOKIE['titular'])) {
        $titular = $_COOKIE['titular'];
        echo "<h2>Noticia seleccionada: $titular</h2>";
    } else {
        // Primera visita: mostrar todos los titulares
        echo "<h2>Noticia política: Reforma electoral en debate</h2>";
        echo "<h2>Noticia económica: El dólar baja frente al euro</h2>";
        echo "<h2>Noticia deportiva: El clásico termina en empate</h2>";
    }
    ?>

    <form action="guardar_titular.php" method="post">
        <p>Selecciona el titular que deseas ver:</p>
        <input type="radio" name="titular" value="Noticia política"> Política<br>
        <input type="radio" name="titular" value="Noticia económica"> Economía<br>
        <input type="radio" name="titular" value="Noticia deportiva"> Deportes<br><br>
        <input type="submit" value="Guardar preferencia">
    </form>

    <p><a href="borrar_cookie.php">Borrar preferencia</a></p>
</body>
</html>
