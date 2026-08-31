<div class="ejercicio">
    <h3>Ejercicio 4: Función comprobar_nombre_usuario</h3>

    <?php
    function comprobar_nombre_usuario($nombre_usuario) {
        // Comprueba que el tamaño del string sea válido
        if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
            echo "<span style='color:red;'>El usuario <strong>" . $nombre_usuario . "</strong> no es válido (tamaño incorrecto).</span><br>";
            return false;
        }

        // Comprueba que los caracteres sean los permitidos
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
        for ($i = 0; $i < strlen($nombre_usuario); $i++) {
            if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false) {
                echo "<span style='color:red;'>El usuario <strong>" . $nombre_usuario . "</strong> no es válido (caracteres no permitidos).</span><br>";
                return false;
            }
        }

        echo "<span style='color:green;'>El usuario <strong>" . $nombre_usuario . "</strong> es válido.</span><br>";
        return true;
    }

    // Script para probar el funcionamiento
    echo "<strong>Pruebas de la función:</strong><br>";
    comprobar_nombre_usuario("ab");                 // Muy corto
    comprobar_nombre_usuario("Usuario_Valido-123"); // Válido
    comprobar_nombre_usuario("Usuario Invalido!");  // Espacio y signo de exclamación no permitidos
    ?>
</div>
