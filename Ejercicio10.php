<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="submit" name="calcular">
    </form>
</body>
</html>

<?php } else {
        
        $palabras = array('Hola','Mundo','Informatico');
       
       	$frase = implode(',',$palabras);
       	
       	echo $frase;
    
    }
?>
