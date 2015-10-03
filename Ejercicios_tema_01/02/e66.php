 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e66</title>
 </head>

 <body>
	<?php 

	$min = 1;
	$max = 100;
	$numero = mt_rand($min, $max);
	 ?>

	 <p>

	 	<?php

	 		if ($numero%2==0)
	 		 	printf("%d es par", $numero );
	 		else 
	 			printf("%d es impar", $numero);
	
		?>
	 </p>
 </body>
 </html>