//a
//Código 1
<?php
$i = 1;
while ($i <= 10) {
 print $i++;
}
?>
*/Explicación:
Inicializa $i en 1.
Mientras $i sea menor o igual a 10, imprime su valor y luego lo incrementa ($i++).
Cuando $i llega a 11, la condición deja de cumplirse y el bucle termina.*/
//Salida: 12345678910

//Código 2
<?php
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
?>
Explicación:
*/Hace exactamente lo mismo que el anterior, solo cambia la sintaxis (usa : y endwhile 
en lugar de llaves {}).*/
//Salida: 12345678910

//Código 3
<?php
$i = 0;
do {
 print ++$i;
} while ($i<10);
?>
*/Explicación:
Ejecuta el bloque al menos una vez, incluso si la condición es falsa.
Incrementa $i antes de imprimir (++$i), por eso empieza en 1 y termina en 10.*/
//salida: 12345678910

//Conclusión: También equivalente en salida, aunque la lógica difiere 
//(el do...while evalúa la condición al final).