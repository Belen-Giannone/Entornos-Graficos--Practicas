<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "Compras");

if (!$conexion) {
    die("Error de conexion: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM catalogo";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>Mi tienda</h1>
    </header>

    <main>

        <h2>Catalogo de productos</h2>
        <p class="subtitulo">Nuestros productos.</p>

        <div class="contenedor">

            <table>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Accion</th>
                </tr>

                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars($fila["producto"]); ?>
                        </td>

                        <td class="precio">
                            $<?php echo number_format((float)$fila["precio"], 2, ',', '.'); ?>
                        </td>

                        <td>
                            <a class="boton"
                               href="agregar.php?id=<?php echo $fila["id"]; ?>">
                                Agregar al carrito
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </table>

        </div>

        <a class="enlace" href="carrito.php">Ver mi carrito</a>

    </main>

</body>

</html>