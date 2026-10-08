<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Formulario</title>
</head>
<body>
    <h1>Login de Cliente</h1>
    <form action="crear_sesion.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave" required><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
