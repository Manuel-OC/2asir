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
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function Media ($n1,$n2){
            $result = ($n1+$n2)/2;
            return $result;
        }

        function EsPrimo($n){
            $primo = "true";
            for ($i = $n-1; $i > 1; $i--){
                if($n%$i==0){
                    $primo="false";
                    break;
                }
            }
            return $primo;
        }

        function Visualizar($r1,$r2,$m){
            switch ([$r1,$r2]){
                case ["true","true"]:
                    echo "Ambos son primos y su media es ".$m;
                    break;
                case ["true","false"]:
                    echo "El primero es primo, el segundo no";
                    break;
                case ["false","true"]:
                    echo "El primero no es primo, el segundo si";
                    break;
                case ["false","false"]:
                    echo "Ninguno es primo";
                    break;
            }
        }

        Visualizar(EsPrimo($_POST['n1']),EsPrimo($_POST['n2']),Media($_POST['n1'],$_POST['n2']));
    
    }
?>