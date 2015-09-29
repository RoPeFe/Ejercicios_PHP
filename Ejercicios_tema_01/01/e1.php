<?php 

$style = 'style="text-decoration: underline; font-weight: bold;"';

print("<p $style >Numero aleatorio entre 100 y 200, ambos inclusive</p>");
printf("<h1>%d</h1>",mt_rand(100, 200));

 ?>