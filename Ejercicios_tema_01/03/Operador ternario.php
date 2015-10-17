<!DOCTYPE html>
 <html>
 
 <head>
 	<title>Operador ternario</title>
 </head>

 <body>
 	<p>
	<?php
		$user = "Rodrigo";
	    $mensaje = (user != null) ? "Bienvenido" . $user : "Ve a registrarte en el login";
	    echo $mensaje;
	?>
	</p>
 </body>
 </html>