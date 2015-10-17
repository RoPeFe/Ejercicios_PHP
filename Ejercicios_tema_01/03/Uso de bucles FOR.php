<!DOCTYPE html>
 <html>
 
 <head>
 	<title>Uso de bucles FOR</title>
 </head>

 <body>
 	<p>
	<?php
		$min = 0;
		$max = 100;
		$numeros = array();
		$aux = 0;

		for ($i=0; $i<100; $i++) {
	        array_push($numeros, rand($min, $max));
	    }

	    $tamano = count($numeros);
	    
	    echo "Array original";
	    echo "<br>";
	    
	    for ($i=0; $i<$tamano; $i++) {
	        printf("%d ", $numeros[$i]);
	    }
	    
	 	echo "<br>";

	    for ($i=0; $i<$tamano; $i++) {
	        for ($j=0; $j<$tamano-1-$i; $j++) {
	            if ($numeros[$j] > $numeros[$j+1]) {
	            	$aux = $numeros[$j];
	            	$numeros[$j] = $numeros[$j+1];
	            	$numeros[$j+1] = $aux;
	            }
	        }
	    }
	    echo "Array ordenada";
	    echo "<br>";

	    for ($i=0; $i<$tamano; $i++) {
	        printf("%d ", $numeros[$i]);
	    }
	?>
	</p>
 </body>
 </html>