<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Ingrese un valor:
        <input type="number" name="valor1">
        <br>
        Ingrese otro valor:
        <input type="number" name="valor2">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        if ($_POST["valor1"]*$_POST["valor2"] > $_POST["valor1"]+$_POST["valor2"]) {
            echo "Producto mayor que la suma";
        } elseif ($_POST["valor1"]*$_POST["valor2"] < $_POST["valor1"]+$_POST["valor2"]) {
            echo "Suma mayor que producto";
        } else{
            echo "La suma y el producto son iguales";
        }
    }
?>