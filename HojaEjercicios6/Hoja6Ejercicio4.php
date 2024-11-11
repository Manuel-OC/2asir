<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function EsPrimo($n){

            $cont = 2;
            $esPrimo = true;

            while($cont < $n){
                if($n%$cont==0){
                    $esPrimo=false;
                    break;
                }

                $cont++;
            }

            return $esPrimo;
        }

        function BuscarPrimos(){

            $cont2=50;

            while($cont2<=100){
                if(EsPrimo($cont2)){echo "El numero ".$cont2." es primo <br>";}
                $cont2++;
            }
        }

        BuscarPrimos();

    }
?>