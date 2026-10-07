```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABML de Ciudades</title>

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
            max-width: 900px;
            margin: 60px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #222;
        }

        .descripcion {
            text-align: center;
            color: #777;
            margin-bottom: 40px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .opcion {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            text-decoration: none;
            color: #333;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: 0.2s;
        }

        .opcion:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
        }

        .opcion h2 {
            margin-top: 0;
            font-size: 20px;
        }

        .opcion p {
            margin-bottom: 0;
            color: #777;
            font-size: 14px;
        }

        .pie {
            text-align: center;
            margin-top: 40px;
            color: #999;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .menu {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>ABML de Ciudades</h1>

        <p class="descripcion">
            Administración de ciudades de la base de datos Capitales
        </p>

        <div class="menu">

            <a class="opcion" href="alta.php">
                <h2>Alta</h2>
                <p>Agregar una nueva ciudad.</p>
            </a>

            <a class="opcion" href="baja.php">
                <h2>Baja</h2>
                <p>Eliminar una ciudad existente.</p>
            </a>

            <a class="opcion" href="modificar.php">
                <h2>Modificación</h2>
                <p>Modificar los datos de una ciudad.</p>
            </a>

            <a class="opcion" href="listado.php">
                <h2>Listado</h2>
                <p>Ver todas las ciudades registradas.</p>
            </a>

            <a class="opcion" href="listado_paginado.php">
                <h2>Listado paginado</h2>
                <p>Consultar las ciudades por páginas.</p>
            </a>

        </div>

        <div class="pie">
            Base de datos: Capitales
        </div>

    </div>

</body>
</html>
```
