<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];

/*Explicación:
$matriz["unamatriz"][6] → devuelve 5.
$matriz["unamatriz"][13] → devuelve 9.
$matriz["unamatriz"]["a"] → devuelve 42.
Salida: 5942
(sin espacios porque echo imprime todo junto)
*/
?>