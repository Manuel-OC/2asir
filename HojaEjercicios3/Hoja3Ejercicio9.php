<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1"></br>
        <input type="number" name="n2"></br>
        Suma:
        <input type="radio" name="op" value="suma">
        </br>
        Resta: 
        <input type="radio" name="op" value="resta">
        </br>
        Multiplicar
        <input type="radio" name="op" value="multiplicacion">
        </br>
        Division
        <input type="radio" name="op" value="division">
        </br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function Operacion(){
            switch ($_POST['op']) {
                case 'suma':
                    $r = $_POST['n1']+$_POST['n2'];
                    return $r;
                    break;
                case 'resta':
                    $r = $_POST['n1']-$_POST['n2'];
                    return $r;
                    break;
                case 'multiplicacion':
                    $r = $_POST['n1']*$_POST['n2'];
                    return $r;
                    break;
                case 'division':
                    $r = $_POST['n1']/$_POST['n2'];
                    return $r;
                    break;
            }
        }

        function Visualizar($r){
            echo $r;
        }

        Visualizar(Operacion());
    
    }
?>