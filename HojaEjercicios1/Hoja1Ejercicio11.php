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
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        $nota = $_POST['valor1'];
 
        if (0 <= $nota && $nota <= 2) {
            echo "muy deficiente";
        } elseif (3 <= $nota && $nota <= 4) {
            echo "deficiente";
        } elseif ($nota == 5) {
            echo "aprobado";
        } elseif ($nota == 6) {
            echo "bien";
        } elseif (7 <= $nota && $nota <= 8) {
            echo "notable";
        } elseif (9 <= $nota && $nota <= 10) {
            echo "sobresaliente";
        } else {
            echo "ERROR";
        }

    }
?>