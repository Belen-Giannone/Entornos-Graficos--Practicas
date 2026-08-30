<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);

/*
Explicación:
$matriz = array(5 => 1, 12 => 2) → Crea un array con dos elementos.
$matriz[] = 56 → Añade 56 al final del array con la siguiente clave numérica disponible (13).
$matriz["x"] = 42 → Añade 42 con clave "x".
unset($matriz[5]) → Elimina el elemento con clave 5.
unset($matriz) → Elimina todo el array.
Salida: Nada, ya que el array ha sido eliminado con unset($matriz) y no se imprime nada.
*/
?> 