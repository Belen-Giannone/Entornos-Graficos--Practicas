<?php
// Verificar si existe la cookie 'estilo'
if (isset($_COOKIE['estilo'])) {
    $estilo = $_COOKIE['estilo'];
} else {
    $estilo = 'claro'; // estilo por defecto
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Estilos con Cookie</title>
    <link rel="stylesheet" href="<?php echo $estilo; ?>.css">
</head>
<body>
    <h2>Bienvenido a la página con estilo "<?php echo $estilo; ?>"</h2>
    <p>Podés cambiar el estilo desde el siguiente enlace:</p>
    <a href="estilo.php">Cambiar estilo</a>
</body>
</html>
