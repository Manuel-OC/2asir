<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="number" name="n3">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function EsPerfecto($n){
            $contador = 0;
            for ($i = $n-1 ; $i >= 1 ; $i--){
                if($n%$i == 0){
                    $contador+=$i;
                }
            }

            if($n == $contador){return true;}
            else{return false;}
        }

        function SonPerfectos($a,$b,$c){
            if($a && $b && $c){echo "SI";}
            else{echo "NO";}
        }

        SonPerfectos(EsPerfecto($_POST['n1']),EsPerfecto($_POST['n2']),EsPerfecto($_POST['n3']));
    
    }
?>