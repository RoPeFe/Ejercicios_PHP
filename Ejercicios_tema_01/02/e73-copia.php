 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e73</title>
 </head>

 <body>
	<?php 

	$min1 = 0;
	$max1 = 9;

	$min2 = 0;
	$max2 = 9;

	$numero1 = mt_rand($min1, $max1);
	$numero2 = mt_rand($min1, $max1);
	 ?>

	 <p style="font-weight: bold;">

	 	<?php 
			printf("La cadena entera %s se convierte al entero %d", $numero1, $numero1); echo "<br>";
			printf("La cadena entera %s se convierte al entero %f", $numero1, $numero1); echo "<br>";
		?>
	 </p>
 </body>
 </html>