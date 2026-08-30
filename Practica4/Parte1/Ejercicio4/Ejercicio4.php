<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";

/*Explicación del código:
Antes del include:
Se ejecuta echo "El $flor $color \n";
En este punto, las variables $flor y $color no existen todavía, porque el archivo datos.php aún no fue incluido.
Por eso, la primera línea imprime:
"EL"
Después del include:
Se ejecuta include 'datos.php';, que importa las variables definidas en ese archivo.
Ahora $flor = 'clavel' y $color = 'blanco'.
Luego se ejecuta echo "El $flor $color";
Imprime: El clavel blanco
*/
?> 

