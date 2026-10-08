<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de canciones</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>Buscador de canciones</h1>
    </header>

    <main>

        <h2>Buscar una canción</h2>
        <p class="subtitulo">Ingresá el nombre de la canción que querés encontrar.</p>

        <div class="contenedor">

            <form action="buscar.php" method="post">

                <label for="cancion">Ingrese nombre:</label>

                <input type="text" name="cancion" id="cancion" required>

                <input type="submit" value="Buscar" class="boton">

            </form>

        </div>

    </main>

</body>

</html>