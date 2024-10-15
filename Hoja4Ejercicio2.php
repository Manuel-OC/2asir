<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Frase:
        <input type="text" name="frase"></br>
        Caracter:
        <input type="text" name="caracter"></br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        echo $_POST['caracter']." aparece ".substr_count($_POST['frase'],$_POST['caracter'])." veces";
    
    }
?>