<?php
// Borrar la cookie
setcookie('titular', '', time() - 3600);
echo "<p>La cookie ha sido borrada. <a href='periodico.php'>Volver al periódico</a></p>";
?>
