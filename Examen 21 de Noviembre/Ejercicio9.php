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

        function MayorSuma($v1,$v2){
            $cont1 = 0;
            $cont2 = 0;

            for($i = 0; $i < count($v1); $i++){
            	if($i%2==0){
                	$cont1+=$v1[$i];
                }
            }
            echo "La suma de los elementos de las posiciones pares del primero es: ".$cont1."<br>";
            for($i = 0; $i < count($v1); $i++){
            	if($i%2==0){
                	$cont2+=$v2[$i];
                }
            }
            echo "La suma de los elementos de las posiciones pares del segundo es: ".$cont2."<br>";

            $d = $cont1-$cont2;

            return $d;
        }

        function Visualizar($r){
            if($r>0){
                echo "El vector 1 suma más que el 2";
            }else if($r<0){
                echo "El vector 2 suma más que el 1";
            }else{
                echo "La suma de ambos vectores es igual";
            }
        }

        $v1 = array(1,2,4,6,8,7,4,900);
        $v2 = array(5,2,7,9,2,4,78,4);

        Visualizar(MayorSuma($v1,$v2));

    }
?>
