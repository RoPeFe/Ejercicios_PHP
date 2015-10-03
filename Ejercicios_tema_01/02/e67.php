 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e67</title>
 </head>

 <body>
	<?php 

	$min = 1;
	$max = 7;
	$numero = mt_rand($min, $max);
	 ?>

	 <p>

	 	<?php

	 		switch ($numero) {
	 			case 1:
	 				echo "Lunes";
	 				break;

	 			case 2:
	 				echo "Martes";
	 				break;

	 			case 3:
	 				echo "Miercoles";
	 				break;

	 			case 4:
	 				echo "Jueves";
	 				break;

	 			case 5:
	 				echo "Viernes";
	 				break;
	 			
	 			case 6:
	 				echo "Sabado";
	 				break;

	 			case 7:
	 				echo "Domingo";
	 				break;

	 			default:
	 				echo "No corresponde a un dia de la semana";
	 				break;
	 		}
	
		?>
	 </p>
 </body>
 </html>