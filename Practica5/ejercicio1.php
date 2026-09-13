<?php

$destinatario = "marisolavila807@gmail.com";
$asunto = "Prueba de envío de correo";

$cuerpo = "
<html>
<head>
    <title>Correo de prueba</title>
</head>
<body>
    <h1>Hola</h1>
    <p>Este es un correo enviado desde PHP utilizando la función mail().</p>
    <p><strong>Este mensaje tiene formato HTML.</strong></p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: marisolavila807@gmail.com\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "No se pudo enviar el correo.";
}
?>