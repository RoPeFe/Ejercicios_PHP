<?php 

$min = 100;
$max = 200;
$style = 'style="text-decoration: underline; font-weight: bold;"';
$numero = mt_rand($min, $max);

print("<p $style >Numero aleatorio entre 100 y 200, ambos inclusive</p>");
printf("<h1>%d, %s</h1>",$numero, gettype($numero));

 ?>