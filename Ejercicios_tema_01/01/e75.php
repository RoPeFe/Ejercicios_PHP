<?php 

$min = 100;
$max = 200;
$styleParrafo = 'style="text-decoration: underline; font-weight: bold;"';
$styleCaja = 'style="width: 20px; background:aqua; color: green; text-align:center; border: solid 1px red"';
$nombre = "numero";
$$nombre = mt_rand($min, $max);

print("<p $styleParrafo >Numero aleatorio entre 100 y 200, ambos inclusive</p>");
printf("<textarea readonly $styleCaja>%d</textarea>",$numero);

 ?>