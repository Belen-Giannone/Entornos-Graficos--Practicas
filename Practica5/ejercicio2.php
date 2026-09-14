<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>

    <h1>Contacto</h1>

    <form action="ejercicio2.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <label for="consulta">Consulta:</label>
        <br>
        <textarea id="consulta" name="consulta" rows="5" cols="40" required></textarea>

        <br><br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>