<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "Compras");

if (!$conexion) {
    die("Error de conexion: " . mysqli_connect_error());
}

$total = 0;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi carrito</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <h1>Mi tienda</h1>
    </header>

    <main>

        <h2>Mi carrito de compras</h2>
        <p class="subtitulo">Estos son los productos que seleccionaste.</p>

        <div class="contenedor">

            <?php
            if (isset($_SESSION["carrito"]) && count($_SESSION["carrito"]) > 0) {

                foreach ($_SESSION["carrito"] as $id) {

                    $id = (int)$id;
                    $consulta = "SELECT * FROM catalogo WHERE id = $id";
                    $resultado = mysqli_query($conexion, $consulta);

                    if ($fila = mysqli_fetch_assoc($resultado)) {

                        echo "<p>";
                        echo htmlspecialchars($fila["producto"]);
                        echo " — <strong>$";
                        echo number_format((float)$fila["precio"], 2, ',', '.');
                        echo "</strong>";
                        echo "</p>";

                        $total = $total + $fila["precio"];
                    }
                }
                ?>

                <div class="total">
                    <h2>Total de la compra</h2>
                    <span>$<?php echo number_format($total, 2, ',', '.'); ?></span>
                </div>

                <?php
            } else {
                echo '<p class="vacio">Tu carrito esta vacio por ahora.</p>';
            }
            ?>

        </div>

        <a class="enlace" href="catalogo.php"> Volver al catalogo</a>

    </main>

</body>

</html>