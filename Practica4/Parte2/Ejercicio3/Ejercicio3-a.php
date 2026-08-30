<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
/*Qué hace:
La función getdate() devuelve un array con la fecha y hora actual del sistema.
Cada índice (hours, minutes, seconds, mday, mon, year) representa una parte del momento actual.
Salida esperada (ejemplo):
Has entrado en esta pagina a las 20 horas, con 44 minutos y 15 segundos, del 30/8/2026
*/

?>