 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e68</title>
 </head>

 <body>
	<?php 

	$min1 = -100;
	$max1 = 100;

	$min2 = 1;
	$max2 = 100;

	$numero1 = mt_rand($min1, $max1);
	$numero2 = mt_rand($min2, $max2);

	 ?>

	 <p style="font-weight: bold;">

	 	<?php 
			printf("%d + %d = %d", $numero1, $numero2, $numero1 + $numero2); echo "<br>";
			printf("%d - %d = %d", $numero1, $numero2, $numero1 - $numero2); echo "<br>";
			printf("%d * %d = %d", $numero1, $numero2, $numero1 * $numero2); echo "<br>";
			printf("%d / %d = %f", $numero1, $numero2, $numero1 / $numero2); echo "<br>";
			printf("%d % %d = %d", $numero1, $numero2, $numero1 % $numero2); echo "<br>";
			printf("El opuesto de %d es %d", $numero1, -$numero1); echo "<br>";
			printf("%d++ vale %d", $numero1, ++$numero1); echo "<br>";
			printf("%d-- vale %d", $numero1, --$numero1);
		?>
	 </p>
 </body>
 </html>