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

        function SumarFilas($m){
            $sum=0;
            for($i = 0; $i < count($m); $i++){
                for($j = 0; $j < count($m[$i]); $j++){
                    $sum+=$m[$i][$j];
                }
                echo "La fila ".$i." suma ".$sum."<br>";
                $m[$i][count($m[$i])]=$sum;
                $sum = 0;
            }
            return $m;
        }

        function VisualizarTotal($m){
            $sum = 0;
            for($k = 0 ; $k < count($m); $k++){
                $sum+=$m[$k][count($m[$k])-1];
            }
            echo "La suma total de las últimas columnas es ".$sum;
        }

        $matriz = array(
            array(4,3,6,7,10,3,2),
            array(11,4,2,7,9,15,6),
            array(2,6,5,7,13,8,9),
            array(7,3,6,4,11,8,5)
        );

        VisualizarTotal(SumarFilas($matriz));

    }
?>