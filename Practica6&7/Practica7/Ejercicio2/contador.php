<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Contador de visitas</title>
</head>
<body>
    <h1>Ejercicio 2 - Práctica 7</h1>
    <p>
    <?php
        if (isset($_COOKIE['contador'])) {
            // Incrementar visitas
            $visitas = $_COOKIE['contador'] + 1;
            setcookie('contador', $visitas, time() + (60 * 60 * 24 * 30)); // validar por 30 días
            echo "Has visitado esta página $visitas veces.";
        } else {
            // Primera visita
            setcookie('contador', 1, time() + (60 * 60 * 24 * 30));
            echo "Bienvenido, es tu primera visita a esta página.";
        }
    ?>
    </p>
</body>
</html>
