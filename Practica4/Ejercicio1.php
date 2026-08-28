<?php
// Función doble
function doble($i /* Parámetro $i */ ) {
	// Operador aritmético de multiplicación *
	return $i*2;
}
// Variable $a de tipo bool, operador de asignación =
$a = TRUE;
// Variable $b de tipo string, operador de asignación =
$b = "xyz";
// Variable $c de tipo string, operador de asignación =
$c = 'xyz';
// Variable $d de tipo int, operador de asignación =
$d = 12;
// 4 llamadas a la función gettype con los parámetros $a, $b, $c y $d respecticamente.
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
// Estructura de control if, con la función is_int en su argumento, que toma el parámetro $d
if (is_int($d)) {
	// Operador de asignación combinado *=
	$d += 4;
}
// Estructura de control if, con la función is_string en su argumento, que toma el parámetro $a
if (is_string($a)) {
	echo "Cadena: $a";
}
// Operador de asignación =, operador ternario ?:, operador de incremento ++, operador aritmético de multiplicación *
$d = $a ? ++$d : $d*3;
// Operador de asignación =, operador de incremento ++, se llama a la función doble con $d+1 como argumento.
$f = doble($d++);
// Operador de asignación =, operador combinado de asignación +=
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?>

// Salida por pantalla: boolean
// string
// string
// integer
// 1 xyz xyz 18 44 44

