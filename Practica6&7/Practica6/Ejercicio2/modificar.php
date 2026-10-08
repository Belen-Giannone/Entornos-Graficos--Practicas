<?php

include("conexion.php");

$ciudadSeleccionada = null;
$mensaje = "";

/* Guardar los cambios */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $habitantes = $_POST["habitantes"];
    $superficie = $_POST["superficie"];
    $tieneMetro = $_POST["tieneMetro"];

    $consulta = "UPDATE ciudades SET
                 ciudad = '$ciudad',
                 pais = '$pais',
                 habitantes = '$habitantes',
                 superficie = '$superficie',
                 tieneMetro = '$tieneMetro'
                 WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        $mensaje = "Ciudad modificada correctamente.";
    } else {
        $mensaje = "Error al modificar la ciudad.";
    }
}


/* Obtener la ciudad seleccionada */
if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $consulta = "SELECT * FROM ciudades WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);

    $ciudadSeleccionada = mysqli_fetch_assoc($resultado);
}


/* Obtener todas las ciudades */
$consulta = "SELECT * FROM ciudades";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modificar ciudad</title>

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

        .boton-modificar {
            display: inline-block;
            padding: 8px 12px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 13px;
        }

        .boton-modificar:hover {
            background-color: #555;
        }

        .formulario {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            font-size: 14px;
        }

        input,
        select {
            width: 100%;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 7px;
            font-size: 14px;
        }

        .boton-guardar {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #333;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .boton-guardar:hover {
            background-color: #555;
        }

        .mensaje {
            background-color: #e8f5e9;
            color: #198754;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        .volver {
            display: inline-block;
            margin-top: 5px;
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

        <h1>Modificar ciudad</h1>

        <p class="descripcion">
            Seleccioná una ciudad para modificar sus datos
        </p>


        <?php if ($mensaje != "") { ?>

            <div class="mensaje">
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>


        <?php if ($ciudadSeleccionada != null) { ?>

            <div class="formulario">

                <h2>Editar ciudad</h2>

                <form method="POST">

                    <input
                        type="hidden"
                        name="id"
                        value="<?php echo $ciudadSeleccionada["id"]; ?>"
                    >


                    <div class="campo">

                        <label for="ciudad">Ciudad</label>

                        <input
                            type="text"
                            id="ciudad"
                            name="ciudad"
                            value="<?php echo $ciudadSeleccionada["ciudad"]; ?>"
                            required
                        >

                    </div>


                    <div class="campo">

                        <label for="pais">País</label>

                        <input
                            type="text"
                            id="pais"
                            name="pais"
                            value="<?php echo $ciudadSeleccionada["pais"]; ?>"
                            required
                        >

                    </div>


                    <div class="campo">

                        <label for="habitantes">Habitantes</label>

                        <input
                            type="number"
                            id="habitantes"
                            name="habitantes"
                            value="<?php echo $ciudadSeleccionada["habitantes"]; ?>"
                            required
                        >

                    </div>


                    <div class="campo">

                        <label for="superficie">Superficie</label>

                        <input
                            type="number"
                            step="0.01"
                            id="superficie"
                            name="superficie"
                            value="<?php echo $ciudadSeleccionada["superficie"]; ?>"
                            required
                        >

                    </div>


                    <div class="campo">

                        <label for="tieneMetro">¿Tiene metro?</label>

                        <select id="tieneMetro" name="tieneMetro">

                            <option
                                value="1"
                                <?php if ($ciudadSeleccionada["tieneMetro"] == 1) echo "selected"; ?>
                            >
                                Sí
                            </option>

                            <option
                                value="0"
                                <?php if ($ciudadSeleccionada["tieneMetro"] == 0) echo "selected"; ?>
                            >
                                No
                            </option>

                        </select>

                    </div>


                    <button class="boton-guardar" type="submit">
                        Guardar cambios
                    </button>

                </form>

            </div>

        <?php } ?>


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
                                class="boton-modificar"
                                href="modificar.php?id=<?php echo $fila["id"]; ?>"
                            >
                                Modificar
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