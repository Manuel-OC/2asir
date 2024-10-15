<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
    	Escribe tu nombre completo
        <input type="text" name="nombrecompleto">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        $cadena = $_POST['nombrecompleto'];
        
        $bum = explode(" ",$cadena);
        
        echo "nombre: ".$bum[0]."<br>";
        echo "apellido1: ".$bum[1]."<br>";
        echo "apellido2: ".$bum[2];
    
    }
?>
