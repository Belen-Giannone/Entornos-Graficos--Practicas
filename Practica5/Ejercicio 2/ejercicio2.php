<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitización básica
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $consulta = htmlspecialchars($_POST['consulta']);

    // Validación extra
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;
    }

    $destinatario = "webmaster@tu-sitio.com"; // Cambiar por tu correo real
    $asunto = "Consulta desde el formulario de contacto";

    $cuerpo = "
    <html>
    <head>
        <title>Consulta de contacto</title>
    </head>
    <body>
        <h2>Datos del visitante</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Consulta:</strong><br>$consulta</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Tu consulta fue enviada correctamente.";
    } else {
        echo "Error al enviar la consulta.";
    }
}
?>
