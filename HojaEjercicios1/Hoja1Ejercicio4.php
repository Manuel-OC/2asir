<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Ingrese sueldo:
        <input type="number" name="valor1">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        if ($_POST['valor1'] > 600) {
            echo "Si es superior a 600 <br>";
        }
        if ($_POST['valor1'] > 1200) {
            echo "Si es superior a 1200 <br>";
        }
        if ($_POST['valor1'] > 1800) {
            echo "Si es superior a 1800 <br>";
        }

    }
?>