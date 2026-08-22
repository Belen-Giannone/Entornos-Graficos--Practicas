<?php
// Función que duplica un número
function doble($i) {
    return $i * 2;
}

// Variables
$a = TRUE;       // Boolean
$b = "xyz";      // String con comillas dobles
$c = 'xyz';      // String con comillas simples
$d = 12;         // Entero

// Mostrar tipos de variables
echo gettype($a) . "<br>";
echo gettype($b) . "<br>";
echo gettype($c) . "<br>";
echo gettype($d) . "<br>";

// Estructuras de control
if (is_int($d)) {
    $d += 4;
}

if (is_string($a)) {
    echo "Cadena: $a <br>";
}

// Operador ternario
$d = $a ? ++$d : $d * 3;

// Uso de función
$f = doble($d++);
$g = $f += 10;

// Salida final
echo $a . " " . $b . " " . $c . " " . $d . " " . $f . " " . $g;
?>
