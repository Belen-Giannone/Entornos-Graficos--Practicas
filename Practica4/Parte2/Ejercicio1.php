<?php
$a = array( 'color' => 'rojo',
 'sabor' => 'dulce',
 'forma' => 'redonda',
 'nombre' => 'manzana',
 4
 );
?> 

<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;

/*Conclusión:
Los dos códigos son equivalentes, la única diferenicia es la forma en que se inicializa el array. 
En el primer caso, se utiliza la sintaxis de array() para crear el array y asignar los valores a las claves correspondientes. 
En el segundo caso, se crean las claves y se les asignan los valores uno por uno. Ambos métodos son válidos y producen el mismo resultado final. */
?> 