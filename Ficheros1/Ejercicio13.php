<html>

<head>
  <title>Problema</title>
</head>

<body>

  <form action="" method="post">
	    Ingrese su nombre:
	    <input type="text" name="nombre">
	    <br>
	    Comentarios:
	    <br>
	    <textarea name="comentarios" rows="10" cols="40"></textarea>
	    <br>
	    <input type="submit" value="Registrar">
  </form>
  
  <?php
	  $ar = fopen("mifichero.txt", "a") or
	    die("Problemas en la creacion");
	  fputs($ar, $_POST['nombre']);
	  fputs($ar, "\n");
	  fputs($ar, $_POST['comentarios']);
	  fputs($ar, "\n");
	  fputs($ar, "--------------------------------------------------------");
	  fputs($ar, "\n");
	  fclose($ar);
	  echo "Los datos se cargaron correctamente.";
  ?>
</body>

</html>