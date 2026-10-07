<?php

include("conexion.php");

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $consulta = "DELETE FROM ciudades WHERE id = $id";

    mysqli_query($conexion, $consulta);
}

$consulta = "SELECT * FROM ciudades";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Baja de ciudad</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        .contenedor {
            max-width: 1100px;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 10px;
        }

        .descripcion {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .tabla-contenedor {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f0f2f4;
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 13px 14px;
            border-top: 1px solid #eee;
            font-size: 14px;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .boton-eliminar {
            display: inline-block;
            padding: 8px 12px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 13px;
        }

        .boton-eliminar:hover {
            background-color: #bb2d3b;
        }

        .volver {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 18px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .volver:hover {
            background-color: #555;
        }

    </style>

</head>

<body>

    <div class="contenedor">

        <h1>Baja de ciudad</h1>

        <p class="descripcion">
            Seleccioná la ciudad que deseas eliminar
        </p>

        <div class="tabla-contenedor">

            <table>

                <tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>Tiene Metro</th>
                    <th>Acción</th>
                </tr>

                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                    <tr>

                        <td><?php echo $fila["id"]; ?></td>

                        <td><?php echo $fila["ciudad"]; ?></td>

                        <td><?php echo $fila["pais"]; ?></td>

                        <td><?php echo $fila["habitantes"]; ?></td>

                        <td><?php echo $fila["superficie"]; ?></td>

                        <td>
                            <?php
                            if ($fila["tieneMetro"] == 1) {
                                echo "Sí";
                            } else {
                                echo "No";
                            }
                            ?>
                        </td>

                        <td>

                            <a
                                class="boton-eliminar"
                                href="baja.php?id=<?php echo $fila["id"]; ?>"
                                onclick="return confirm('¿Está seguro de que desea eliminar esta ciudad?');"
                            >
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php } ?>

            </table>

        </div>

        <a class="volver" href="index.php">
            ← Volver al menú
        </a>

    </div>

</body>

</html>