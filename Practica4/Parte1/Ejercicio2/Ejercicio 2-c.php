//c

<?php
// Código 1
/*
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}

Explicación:
Evalúa la variable $i en cada condición.
Si $i es igual a 0, imprime "i equals 0".
Si $i es igual a 1, imprime "i equals 1".
Si $i es igual a 2, imprime "i equals 2".
Si $i no coincide con ninguno de esos valores, no imprime nada.
*/

// Código 2
/*
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}

Explicación:
Evalúa la variable $i una sola vez.
Compara su valor con cada case.
Si coincide, ejecuta el bloque correspondiente.
El break evita que se sigan ejecutando los demás casos.
Si $i no coincide con ninguno, no imprime nada (a menos que agreguemos un default).
*/
?>

/*Conclusión:
En este caso, los dos códigos son equivalentes en salida: si $i = 0, imprimen "i equals 0", 
si $i = 1, "i equals 1", y si $i = 2, "i equals 2".
La diferencia está en la estructura:
- if...elseif es más flexible para condiciones complejas.
- switch es más claro y ordenado cuando se compara un mismo valor contra varias opciones.*/