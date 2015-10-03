 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e70</title>
 </head>

 <body>
	<?php 

	$min1 = -100;
	$max1 = 100;

	$min2 = 1;
	$max2 = 10;

	$numero1 = $max1+mt_rand()/mt_getrandmax()*($min1-$max1);
	$numero2 = $max2+mt_rand()/mt_getrandmax()*($min2-$max2);
	 ?>

	 <p style="font-weight: bold;">

	 	<?php 
			printf("%f + %f = %f", $numero1, $numero2, $numero1 + $numero2); echo "<br>";
			printf("%f - %f = %f", $numero1, $numero2, $numero1 - $numero2); echo "<br>";
			printf("%f * %f = %f", $numero1, $numero2, $numero1 * $numero2); echo "<br>";
			printf("%f / %f = %f", $numero1, $numero2, $numero1 / $numero2); echo "<br>";
			printf("%f % %f = %f", $numero1, $numero2, $numero1 % $numero2); echo "<br>";
			printf("El opuesto de %f es %f", $numero1, -$numero1); echo "<br>";
			printf("%f++ vale %f", $numero1, ++$numero1); echo "<br>";
			printf("%f-- vale %f", $numero1, --$numero1);
		?>
	 </p>
 </body>
 </html>