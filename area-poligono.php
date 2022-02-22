<!DOCTYPE html>

<html lang="es">

<head>

   <title>Formulario de obtencion de datos</title>
   <meta charset="utf-8" />
</head>

<body>
	<?php

	if ($_GET['poligono'] == "pol"){
		$resultado = ($_GET['base'] * $_GET['lado'] * $_GET['altura'])/2;	
		echo "<center><h3> El area del poligono es $resultado </h3></center>";
	}
	?>
</body>
</html>