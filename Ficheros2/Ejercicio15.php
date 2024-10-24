<html>

<head>
  <title>Problema</title>
</head>

<body>

	<?php
		$f = fopen("imagen.gif", "rb");
		$contenido = fread($f, filesize("imagen.gif"));
		echo $contenido;
		fclose($f);
	?>

</body>

</html>

<html>