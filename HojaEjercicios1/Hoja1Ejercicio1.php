<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Ingrese primer valor:
        <input type="number" name="valor1">
        Ingrese segundo valor:
        <input type="number" name="valor2">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        if ($_POST["valor1"]+$_POST["valor2"] > 0) {
            echo "La suma es positiva";
        } elseif ($_POST["valor1"]+$_POST["valor2"] < 0) {
            echo "La suma es negativa";
        } else{
            echo "La suma es 0";
        }

    }
?>