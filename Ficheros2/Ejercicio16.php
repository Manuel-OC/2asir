<html>

<head>
  <title>Problema</title>
</head>

<body>

	<?php
		$f = fopen("imagen.gif", "wb");
		$contenido = 12;
		if(fwrite($f, $contenido) != false){
			echo "Contenido escrito correctamente";
		}
		fclose($f);
	?>

</body>

</html>

<html>