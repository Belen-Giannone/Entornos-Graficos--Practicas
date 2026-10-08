<?php
if (isset($_POST['estilo'])) {
    $estilo = $_POST['estilo'];
    // Guardar cookie por 30 días
    setcookie('estilo', $estilo, time() + (3600 * 24 * 30));
    // Redirigir de nuevo a index
    header("Location: index.php");
    exit();
} else {
    echo "No se seleccionó ningún estilo.";
}
?>
