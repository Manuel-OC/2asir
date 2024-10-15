<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
    	Escribe tu nombre completo:
    	<input type="number" name="n1">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

<?php } else {
        
        $ciudades = ["Cadiz","Chiclana","San Fernando"];
        $litros = ["12","50","34"];
        
        echo "En ".$ciudades[$_POST['n1']]." ha caído ".$litros[$_POST['n1']];
    
    }
?>
