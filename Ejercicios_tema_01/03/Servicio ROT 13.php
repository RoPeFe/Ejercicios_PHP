 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>Servivio ROT 13</title>
 </head>

 <body>
	<?php
		$posicion = 13;
		$abc ="abcdefghijklmnopqrstuvwxyz";
		$cadena = $_GET["cadena"];
		$cifrado = $cadena;
		
		for ($i=0; $i < strlen($cadena); $i++) { //recorremos la $cadena
			if ($cadena[$i]!=" ") { //si no tiene espacio continuamos
				for ($j=0; $j < strlen($abc); $j++) { //recorremos para ver la posicion del caracter en $abc
					if ($cadena[$i]==$abc[$j]) {
						if ($j+$posicion < strlen($abc)) { //si hay mas de $posicion posiciones hasta el final le sumamos $posicion
							$cifrado[$i]=$abc[$j+$posicion];
						}else{
							$cifrado[$i]=$abc[$posicion-(strlen($abc)-$j)]; //si si hay menos de $posicion posiciones calculamos cuanto le tenemos que sumar desde la primera posicion
						}
					}
				}	
			}
		}
	?>

	 <p>

	 	<?php
	 		echo $cadena;
	 		echo "<br>";
	 		echo $cifrado;
		?>
	 </p>
 </body>
 </html>