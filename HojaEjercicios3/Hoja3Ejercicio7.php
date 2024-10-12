<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function Operacion(){
            switch($_POST['n1']%2){
                case 0:
                    $parmayor=$_POST['n1']+2;
                    $imparmenor=$_POST['n1']-1;
                    break;
                case 1:
                    $parmayor=$_POST['n1']+1;
                    $imparmenor=$_POST['n1']-2;
                    break;
            }
            
            Visualizar($parmayor,$imparmenor);
        }

        function Visualizar($r1,$r2){
            echo "El primer par mayor es ".$r1." y el primer impar menor es ".$r2;
        }

        Operacion();
    
    }
?>