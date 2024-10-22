<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
	  $ar = fopen("mifichero.txt", "r") or
	    die("Problemas en la creacion");
	  while(!feof($ar)){
	  	$linea = fgets($ar);
	  	$lineasalto = nl2br($linea);
	  	echo $lineasalto;
	  }
	  fclore($ar);
  ?>
</body>

</html>

<html>
