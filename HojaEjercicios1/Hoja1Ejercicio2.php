<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Ingrese nota:
        <input type="number" name="valor1">
        <br>
        Ingrese edad:
        <input type="number" name="valor2">
        <br>
        Ingrese caracter:
        <input type="text" name="valor3">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        if ($_POST['valor1'] < 5) {
            echo "NO ES POSIBLE, nota suspensa";
        } elseif ($_POST['valor2'] < 18) {
            echo "NO ES POSIBLE, es menor de edad";
        } elseif ($_POST["valor3"] == 'V' || $_POST["valor3"] == 'v'){
            echo "ACEPTADO";
        } elseif ($_POST["valor3"] == 'M' || $_POST["valor3"] == 'm'){
            echo "ACEPTADA";
        } else{
            echo "ERROR";
        }

    }
?>