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

        function HayDosPares($v){

            $cont = 0;

            for($i = 0; $i < count($v); $i++){
                if( $v[$i]%2==0 && $v[$i]>=30 && $v[$i]<=40){
                    $cont++;
                }
            }

            if($cont >= 2){return "si";}
            else{return "no";}
        }

        function Visualizar($r){
            if($r == 'si'){echo "si existe";}
            else{echo "no existe";}
        }

        $numeros = [72,45,32,67,40,12,30];

        Visualizar(HayDosPares($numeros));
    }
?>