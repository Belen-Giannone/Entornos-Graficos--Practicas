<html>
<head><title>Documento 1</title></head>
<body>
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5; //cantidad de filas
 $col = 2; //cantidad de columnas
 for ($r = 1; $r <= $row; $r++) {
 echo "<tr>"; // abre la fila
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n"; // crea una celda vacía
 } echo "</tr>\n"; // cierra la fila
 }
 echo "</table>\n";
?>
</body></html>

/*Explicación del código:
echo "<table width=90% border='1'>"; → abre una tabla HTML con ancho del 90% y borde de 1px.
$row = 5; → define que la tabla tendrá 5 filas.
$col = 2; → define que cada fila tendrá 2 columnas.
for ($r = 1; $r <= $row; $r++) → bucle externo que recorre las filas.
echo "<tr>"; → abre una fila (<tr>).
for ($c = 1; $c <= $col; $c++) → bucle interno que recorre las columnas.
echo "<td>&nbsp;</td>\n"; → imprime una celda vacía (<td>). El &nbsp; es un espacio en blanco para que la celda no quede totalmente vacía.
echo "</tr>\n"; → cierra la fila.
Al terminar los bucles, se imprime una tabla de 5 filas y 2 columnas.*/