<!DOCTYPE html>
 <html>
 
 <head>
 	<title>Uso de bucles Do While y While</title>
 </head>

 <body>
 	<p>
	<?php
		$min = 0;
		$max = 50;
		$nuevo = 0;
	
	    while ($nuevo != 16) {
	    	$nuevo = rand($min, $max);
	    	printf("%d ", $nuevo);
	    }
	?>
	</p>
 </body>
 </html>