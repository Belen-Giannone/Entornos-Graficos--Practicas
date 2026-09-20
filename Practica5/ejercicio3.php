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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendar sitio</title>
</head>

<body>

    <h1>Recomendar este sitio a un amigo</h1>

    <form action="ejercicio3.php" method="post">

        <label for="nombre">Tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <br><br>

        <label for="email_amigo">Correo de tu amigo:</label>
        <input type="email" id="email_amigo" name="email_amigo" required>

        <br><br>

        <label for="mensaje">Mensaje:</label>
        <br>
        <textarea id="mensaje" name="mensaje" rows="5" cols="40"></textarea>

        <br><br>

        <input type="submit" value="Recomendar">

    </form>

</body>
</html>