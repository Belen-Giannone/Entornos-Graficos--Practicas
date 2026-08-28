//b
//Código 1
<?php
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
?>

//Código 2
<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>

//Código 3
<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>

//Código 4
<?php
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?>