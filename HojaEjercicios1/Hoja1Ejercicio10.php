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

        switch ($nota){
            case 0: 
                echo "muy deficiente";
                break;
            case 1: 
                echo "muy deficiente";
                break;
            case 2: 
                echo "muy deficiente";
                break;
            case 3: 
                echo "deficiente";
                break;
            case 4: 
                echo "deficiente";
                break;
            case 5: 
                echo "aprobado";
                break;
            case 6: 
                echo "bien";
                break;
            case 7: 
                echo "notable";
                break;
            case 8: 
                echo "notable";
                break;
            case 9: 
                echo "sobresaliente";
                break;
            case 10: 
                echo "sobresaliente";
                break;
            default:
                echo "ERROR";
                break;
        }

    }
?>