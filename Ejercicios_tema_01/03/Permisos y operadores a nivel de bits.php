<!DOCTYPE html>
 <html>
 
 <head>
 	<title>Permisos y operadores a nivel de bits</title>
 </head>

 <body>
 	<p>
	<?php
		const LOGIN  			 = 1;
	    const ACCESEMPRESARIALES = 2;
	    const ACCESFACTURACION 	 = 4;
	    const ESCRIEMPRESARIALES = 8;
	    const ESCRIFACTURACION   = 16;
	    const PERMISOS   		 = 32;

	    $usuario = LOGIN+ACCESFACTURACION+PERMISOS;
	    
	    if ( $invitado & LOGIN ) {
		    echo "PUEDE LOGUEARSE";
		}
		else {
		    echo "NO PUEDE LELOGUEARSE";
		}

		if ( $invitado & ACCESEMPRESARIALES) {
		    echo "PUEDE ACCEDER A DATOS EMPRESARIALES";
		}
		else {
		    echo "NO PUEDE ACCEDER A DATOS EMPRESARIALES";
		}

		if ( $invitado & ACCESFACTURACION) {
		    echo "PUEDE ACCEDER A DATOS DE FACTURACIÓN";
		}
		else {
		    echo "NO PUEDE ACCEDER A DATOS DE FACTURACIÓN";
		}

		if ( $invitado & ESCRIEMPRESARIALES) {
		    echo "PUEDE ESCRIBIR DATOS EMPRESARIALES";
		}
		else {
		    echo "NO PUEDE ESCRIBIR DATOS EMPRESARIALES";
		}

		if ( $invitado & ESCRIFACTURACION) {
		    echo "PUEDE ESCRIBIR DATOS DE FACTURACIÓN";
		}
		else {
		    echo "NO PUEDE ESCRIBIR DATOS DE FACTURACIÓN";
		}

		if ( $invitado & PERMISOS) {
		    echo "PUEDE ADMINISTRAR PERMISOS";
		}
		else {
		    echo "NO PUEDE ADMINISTRAR PERMISOS";
		}
	?>
	</p>
 </body>
 </html>