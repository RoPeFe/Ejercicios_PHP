<?php 

$min = 1;
$max = 100;
$style = 'style="text-decoration: underline; font-weight: bold;"';
$numero = mt_rand($min, $max);

print("<p $style >Numero aleatorio entre 100 y 200, ambos inclusive</p>");
printf("<h1>%d, %b, %o, %x</h1>",$numero, $numero, $numero, $numero);

 ?>