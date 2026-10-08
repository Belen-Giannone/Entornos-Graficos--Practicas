<?php

include("conexion.php");

$registrosPorPagina = 5;

/* Saber en qué página estamos */
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}

/* Calcular desde qué registro comenzar */
$inicio = ($pagina - 1) * $registrosPorPagina;


/* Obtener las ciudades de la página actual */
$consulta = "SELECT * FROM ciudades
             LIMIT $inicio, $registrosPorPagina";

$resultado = mysqli_query($conexion, $consulta);


/* Obtener cantidad total de ciudades */
$consultaTotal = "SELECT COUNT(*) AS total FROM ciudades";

$resultadoTotal = mysqli_query($conexion, $consultaTotal);

$filaTotal = mysqli_fetch_assoc($resultadoTotal);

$totalRegistros = $filaTotal["total"];


/* Calcular cantidad de páginas */
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Listado paginado</title>

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

        .metro-si {
            color: #198754;
            font-weight: bold;
        }

        .metro-no {
            color: #777;
        }

        .paginacion {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 25px;
        }

        .pagina {
            display: inline-block;
            padding: 9px 13px;
            background-color: white;
            color: #333;
            text-decoration: none;
            border-radius: 7px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        }

        .pagina:hover {
            background-color: #eee;
        }

        .pagina-activa {
            background-color: #333;
            color: white;
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

        <h1>Listado paginado</h1>

        <p class="descripcion">
            Ciudades registradas en la base de datos Capitales
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

                </tr>


                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                    <tr>

                        <td>
                            <?php echo $fila["id"]; ?>
                        </td>

                        <td>
                            <?php echo $fila["ciudad"]; ?>
                        </td>

                        <td>
                            <?php echo $fila["pais"]; ?>
                        </td>

                        <td>
                            <?php echo $fila["habitantes"]; ?>
                        </td>

                        <td>
                            <?php echo $fila["superficie"]; ?>
                        </td>

                        <td>

                            <?php

                            if ($fila["tieneMetro"] == 1) {
                                echo '<span class="metro-si">Sí</span>';
                            } else {
                                echo '<span class="metro-no">No</span>';
                            }

                            ?>

                        </td>

                    </tr>

                <?php } ?>

            </table>


            <div class="paginacion">

                <?php if ($pagina > 1) { ?>

                    <a
                        class="pagina"
                        href="listado_paginado.php?pagina=<?php echo $pagina - 1; ?>"
                    >
                        ← Anterior
                    </a>

                <?php } ?>


                <?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>

                    <a
                        class="pagina <?php if ($i == $pagina) echo 'pagina-activa'; ?>"
                        href="listado_paginado.php?pagina=<?php echo $i; ?>"
                    >
                        <?php echo $i; ?>
                    </a>

                <?php } ?>


                <?php if ($pagina < $totalPaginas) { ?>

                    <a
                        class="pagina"
                        href="listado_paginado.php?pagina=<?php echo $pagina + 1; ?>"
                    >
                        Siguiente →
                    </a>

                <?php } ?>

            </div>

        </div>


        <a class="volver" href="index.php">
            ← Volver al menú
        </a>

    </div>

</body>

</html>