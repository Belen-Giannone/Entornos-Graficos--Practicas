<?php

include("conexion.php");

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $habitantes = $_POST["habitantes"];
    $superficie = $_POST["superficie"];
    $tieneMetro = $_POST["tieneMetro"];

    $consulta = "INSERT INTO ciudades 
                 (ciudad, pais, habitantes, superficie, tieneMetro)
                 VALUES 
                 ('$ciudad', '$pais', '$habitantes', '$superficie', '$tieneMetro')";

    if (mysqli_query($conexion, $consulta)) {
        $mensaje = "Ciudad agregada correctamente.";
    } else {
        $mensaje = "Error al agregar la ciudad.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alta de ciudad</title>

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
            max-width: 650px;
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

        .formulario {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
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

        input:focus,
        select:focus {
            outline: none;
            border-color: #888;
        }

        .boton {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #333;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .boton:hover {
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

        <h1>Alta de ciudad</h1>

        <p class="descripcion">
            Agregar una nueva ciudad a la base de datos
        </p>

        <?php if ($mensaje != "") { ?>

            <div class="mensaje">
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>

        <div class="formulario">

            <form method="POST">

                <div class="campo">

                    <label for="ciudad">Ciudad</label>

                    <input
                        type="text"
                        id="ciudad"
                        name="ciudad"
                        required
                    >

                </div>

                <div class="campo">

                    <label for="pais">País</label>

                    <input
                        type="text"
                        id="pais"
                        name="pais"
                        required
                    >

                </div>

                <div class="campo">

                    <label for="habitantes">Habitantes</label>

                    <input
                        type="number"
                        id="habitantes"
                        name="habitantes"
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
                        required
                    >

                </div>

                <div class="campo">

                    <label for="tieneMetro">¿Tiene metro?</label>

                    <select id="tieneMetro" name="tieneMetro" required>

                        <option value="1">Sí</option>
                        <option value="0">No</option>

                    </select>

                </div>

                <button class="boton" type="submit">
                    Agregar ciudad
                </button>

            </form>

        </div>

        <a class="volver" href="index.php">
            ← Volver al menú
        </a>

    </div>

</body>

</html>