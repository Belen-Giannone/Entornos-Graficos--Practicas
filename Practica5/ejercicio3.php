<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email_amigo = $_POST["email_amigo"];
    $mensaje = $_POST["mensaje"];

    $asunto = "Te recomiendo este sitio";

    $cuerpo = "
    <html>
    <body>
        <h1>Recomendación</h1>
        <p>$nombre te recomienda visitar este sitio.</p>
        <p>$mensaje</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: webmaster@localhost\r\n";

    if (mail($email_amigo, $asunto, $cuerpo, $headers)) {
        echo "La recomendación fue enviada correctamente.";
    } else {
        echo "No se pudo enviar la recomendación.";
    }
}

?>