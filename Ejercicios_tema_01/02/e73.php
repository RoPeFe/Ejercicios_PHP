 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>e73</title>
 </head>

 <body>
	<?php 

		$real="";
		$entera="";
		$letra="";
		$letraReal="";

		$numeros="0123456789abc";
		
		for ($i=0; $i < 5; $i++) { 
			$letra=$numeros[mt_rand(0,12)];
			$entera=$entera.$letra;
		}

		for ($i=0; $i < 5; $i++) { 
			$letraReal=$numeros[mt_rand(0,12)];
			$real=$real.$letraReal;
		}
	?>

	 <p style="font-weight: bold;">

	 	<?php 
			printf("La cadena entera %s se convierte al entero %d", $entera, $entera); echo "<br>";
			printf("La cadena real %s se convierte al número real %f", $real, $real); echo "<br>";
		?>
	 </p>
 </body>
 </html>