<?php

$conexion = mysqli_connect("localhost", "root", "", "prueba")
    or die("Error de conexion");

$cancion = $_POST["cancion"];

$consulta = "SELECT * FROM buscador WHERE canciones LIKE '%$cancion%'";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de busqueda</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>Buscador de canciones</h1>
    </header>

    <main>

        <h2>Resultados de busqueda</h2>

        <div class="contenedor">

            <?php
            if (mysqli_num_rows($resultado) > 0) {

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<p class="resultado">Encontrada: ';
                    echo htmlspecialchars($fila["canciones"]);
                    echo '</p>';
                }

            } else {
                echo '<p class="mensaje">No se encontro ninguna cancion con ese nombre.</p>';
            }

            mysqli_close($conexion);
            ?>

        </div>

        <p>
            <a href="formulario.php" class="boton">Volver a buscar</a>
        </p>

    </main>

</body>

</html>