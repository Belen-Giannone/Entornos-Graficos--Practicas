<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Estilo</title>
</head>
<body>
    <h3>Elegí el estilo de la página:</h3>
    <form action="guardar_estilo.php" method="post">
        <input type="radio" name="estilo" value="claro" checked> Claro<br>
        <input type="radio" name="estilo" value="oscuro"> Oscuro<br>
        <input type="radio" name="estilo" value="azul"> Azul<br><br>
        <input type="submit" value="Guardar estilo">
    </form>
</body>
</html>
