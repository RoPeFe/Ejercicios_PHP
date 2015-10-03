 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e65</title>
 </head>

 <body>
	<?php 

	$min = 1;
	$max = 100;
	$limite = 10;
	 ?>

	 <p>

	 	<?php

		 	for ($i=0; $i < $limite ; $i++) {
		 		if ($i < $limite-1)
		 		 	printf("%d, ", mt_rand($min, $max));
		 		else 
		 			printf("%d", mt_rand($min, $max));
		 	}
		
		?>
	 </p>
 </body>
 </html>