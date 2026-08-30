<html>
<head><title>Documento 2</title></head>
<body>
<?php
//si el formulario no ha sido enviado, se muestra el formulario
if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">
 <input type="submit" name="submit" value="Ir">
 </form>
<?php
 }
else {
  //si el formulario ha sido enviado, se procesa la edad
 $age = $_POST['age'];
 if ($age >= 21) {
 echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}

/* Explicación del código:
if (!isset($_POST['submit'])) → Verifica si el formulario no fue enviado.
Si no fue enviado, se muestra el formulario con un campo de texto para ingresar la edad y un botón Ir.
action="<?php echo $_SERVER['PHP_SELF']; ?>" → Hace que el formulario se envíe a la misma página.
method="post" → Envía los datos usando el método POST.

Cuando el usuario envía el formulario, se ejecuta el bloque else.
$age = $_POST['age']; → Recupera el valor ingresado en el campo "Edad".
if ($age >= 21) → Si la edad es mayor o igual a 21, imprime "Mayor de edad".
else → Si no, imprime "Menor de edad" */
?>
</body></html>
