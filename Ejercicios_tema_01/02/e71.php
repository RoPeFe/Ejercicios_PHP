<!DOCTYPE html>
 
<html>

<head>
 	<title>e71</title>
</head>

<body>
	<?php

		$retamar="Retamar";
		$letra=$retamar[mt_rand(0,6)];

	?>

	<p style="font-weight: bold;">

		<?php 
			printf("Una letra aleatoria de la palabra Retamar es %s", $letra); echo "<br>";
		?>
	</p>
</body>
</html>