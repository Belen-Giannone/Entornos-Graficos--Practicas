<?php
if (isset($_POST['titular'])) {
    $titular = $_POST['titular'];
    setcookie('titular', $titular, time() + (60 * 60 * 24 * 30)); // 30 días
    header("Location: periodico.php");
    exit();
} else {
    echo "No seleccionaste ningún titular.";
}
?>
