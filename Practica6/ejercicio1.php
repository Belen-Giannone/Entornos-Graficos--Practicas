Consulta de una base de datos:

Para comenzar la comunicacion con un servidor de base de datos MySQL, es necesario
abrir una conexion a ese servidor. Para inicializar esta conexion, 
PHP ofrece la funcion mysqli_connect().

Todos sus parametros son opcionales, pero hay tres de ellos que generalmente son necesarios:
servidor, usuario y contraseña.

Una vez abierta la conexion, se debe seleccionar una base de datros para su uso,
mediante la funcion mysqli_select_db().

Esta funcion debe pasar como parametro la conexion y el nombre de la base de datos.

La funcion mysqli_query() se utiliza para realizar una consulta a la base de datos y requiere como parametros la conexion y la consulta SQL.
La clausula or die() se utiliza para detener la ejecucion cuando se produce un error y la funcion mysqli_error() se puede usar para obtener la informacion sobre 
el error producido.

Si la funcion mysqli_query() es exitos, el conjunto resultante retornado se almacena en una variable,
por ejeplo, $vResult, y a continuacion se puede ejecutar el siguiente codigo:

<?php

while ($fila = mysqli_fetch_array($vResultado)) 
{ 
?> 

<tr> 
    <td><?php echo ($fila[0]); ?></td> 
    <td><?php echo ($fila[1]); ?></td> 
    <td><?php echo ($fila[2']); ?></td> 
</tr> 

<tr> 
    <td colspan="5"> 

<?php 
}

mysqli_free_result($vResultado); 
mysqli_close($link); 
?>


Explicacion del codigo:
El while permite recorrer las filas que forman parte del conjunto de resultados
obtenidos mediante mysqli_query().

mysqli_fetch_array($vResultado) obtiene una fila del conjunto de resultados y la almacena en la variable $fila.
$fila[0], $fila[1] y $fila[2] permiten acceder a los datos de las columnas de la fila obtenida. 
Estos datos se muestran dentro de las celdas de una tabla HTML mediante echo.

El while continua ejecutandose mientras mysqli_fetch_array() siga obteniendo filas del resultado.

mysqli_free_result($vResultado) libera el conjunto de los resultados almacenado en $vResultado.

mysqli_close($link) cierra la conexion con el servidor de base de datos.