 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e69</title>
 </head>

 <body>
	<?php 

		$min1 = 0;
		$max1 = 1;
		$numero1 = $max1+mt_rand()/mt_getrandmax()*($min1-$max1);

		$min2 = -1000;
		$max2 = 1000;
		$numero2 = $max2+mt_rand()/mt_getrandmax()*($min2-$max2);

		$milesimas = ((int)($numero2*1000))/1000;
		$decimas = ((int)($numero2/10))*10;
	?>

	 <p style="font-weight: bold;">

	 	<?php 
			printf("Número real aleatorio entre 0 y 1: %f", $numero1); echo "<br>";
			printf("Número real aleatorio entre -1000 y 1000: %f", $numero2); echo "<br>";
			printf("Segundo número truncado a las milesimas: %f", $milesimas); echo "<br>";
			printf("Segundo número truncado a las decenas: %d", $decimas); echo "<br>";
		
		?>
	 </p>
 </body>
 </html>