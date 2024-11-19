<?php
	session_start();
    
    	if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
    	<input type="text" name="nombre">
    	<input type="text" name="localidad">
        <input type="submit" name="calcular">
    </form>


<?php } else {
        
        function Confirmar($n,$l){
        
        	echo "Eres ".$n." de ".$l;
        
        }
        
        $_SESSION['nombresito'] = $_POST['nombre'];
        $_SESSION['localidadsita'] = $_POST['localidad'];
    	
    	Confirmar($_SESSION['nombresito'],$_SESSION['localidadsita'] );
    
    }
?>

    <form method="post" action="Ejercicio15-2.php" >
    	<input type="submit" name="calcular">
    </form>

</body>
</html>
