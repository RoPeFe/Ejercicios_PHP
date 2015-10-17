 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>Condicionales</title>
 </head>

 <body>
	<?php 

		$min = 0;
		$max = 100;

		$numero1 = mt_rand($min, $max);
		$numero2 = mt_rand($min, $max);
		$numero3 = mt_rand($min, $max);

		$pequeno = 0;
		$mediano = 0;
		$grande = 0;

		//encontramos el pequeño
		if ($numero1<$numero2 && $numero1<$numero3) {
			$pequeno=$numero1;
		}elseif ($numero2<$numero1 && $numero2<$numero3) {
			$pequeno=$numero2;
		}else {
			$pequeno=$numero3;
		}

		//encontramos el grande
		if ($numero1>$numero2 && $numero1>$numero3) {
			$grande=$numero1;
		}elseif ($numero2>$numero1 && $numero2>$numero3) {
			$grande=$numero2;
		}else {
			$grande=$numero3;
		}

		//y por descarte encontramos el mediano
		if ($grande==$numero2 && $pequeno==$numero3 || $grande==$numero3 && $pequeno==$numero2) {
			$mediano=$numero1;
		}elseif ($grande==$numero1 && $pequeno==$numero3 || $grande==$numero3 && $pequeno==$numero1) {
			$mediano=$numero2;
		}else {
			$mediano=$numero3;
		}
	?>

	 <p>

	 	<?php 
	 		printf("%d, %d, %d <br>", $numero1, $numero2, $numero3);
			printf("%d, %d, %d", $grande, $mediano, $pequeno);
		?>
	 </p>
 </body>
 </html>