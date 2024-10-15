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

        function MediaFila($m,$f){
            $sum = 0;
            
            for($i = 0; $i < count($m[$f]) ; $i++){
                $sum+=$m[$f][$i];
            }

            return $sum/(count($m[$f]));
        }

        function MediaColumna($m,$c){
            $sum = 0;
            
            for($j = 0; $j < count($m) ; $j++){
                $sum+=$m[$j][$c];
            }

            return $sum/(count($m));
        }

        function MediaTotal($m){
            $sum = 0;
            $count = 0;

            for($k = 0 ; $k < count($m); $k++){
                for($l = 0; $l < count($m[$k]); $l++){
                    $sum+=$m[$k][$l];
                    $count++;  
                }
            }

            return $sum/$count;
        }

        $matriz = array(
                    array(7,5,3),
                    array(9,1,8),
                    array(1,2,3),
                    array(4,6,8)
                    );

        echo "Media Fila 1 -> ".MediaFila($matriz,0)."<br>";
        echo "Media Fila 2 -> ".MediaFila($matriz,1)."<br>";
        echo "Media Fila 3 -> ".MediaFila($matriz,2)."<br>";
        echo "Media Fila 4 -> ".MediaFila($matriz,3)."<br>";
        echo "Media Columna 1 -> ".MediaColumna($matriz,0)."<br>";
        echo "Media Columna 2 -> ".MediaColumna($matriz,1)."<br>";
        echo "Media Columna 3 -> ".MediaColumna($matriz,2)."<br>";
        echo "Media Total -> ".MediaTotal($matriz);
    }
?>