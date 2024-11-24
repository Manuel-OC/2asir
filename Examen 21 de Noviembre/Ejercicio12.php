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

        function FilaPositiva($m){
           for($k = 0; $k < count($m); $k++){
                $positiva = true;
                for($l = 0; $l < count($m[$k]); $l++){
                    if($m[$k][$l] < 0){
                        $positiva = false;
                    }
                }
                if($positiva){
                    echo "La fila ".$k." es entera positiva <br>";
                }
           }
        }

        function SumaFila($m,$fila){
            $sum = 0;
            for($i = 0; $i < count($m[$fila]); $i++){
                $sum += $m[$fila][$i];
            }
            echo "La suma de la fila ".$fila." es ".$sum."<br>";
        }

        function SumaColumna($m,$columna){
            $sum  = 0;
            for($j = 0; $j < count($m); $j++){
                $sum += $m[$j][$columna];
            }
            echo "La suma de la columna ".$columna." es ".$sum;
        }

        $matriz = array(
            array(4,3,6,7,10,3,2),
            array(11,-4,2,7,9,15,6),
            array(2,6,5,7,13,8,9),
            array(7,3,6,4,11,8,5)
        );

        FilaPositiva($matriz);
        SumaFila($matriz,1);
        SumaColumna($matriz,3);

    }
?>