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

        function Reordenar($m){

            $mAux = array(0,0,0);
            $mNueva = array(
                        array(0,0,0),
                        array(0,0,0),
                        array(0,0,0),
                        array(0,0,0)
                    );

            for ($i = 0; $i < 3; $i++){
                $mAux[$i] = $m[3][$i];
            }

            for ($i = 2; $i >= 0; $i--){
                for($j = 0; $j < 3; $j++){
                    $m[$i+1][$j] = $m[$i][$j];
                }  
            }

            for ($i = 0; $i < count($m[0]); $i++){
                $m[0][$i] = $mAux[$i];
            }

            return $m;
        }

        function Visualizar($r){
            for ($k = 0; $k < count($r); $k++){
                for ($l = 0; $l < count($r[$k]) ; $l++){
                    echo $r[$k][$l]." | ";
                }
                echo "<br>";
            }
        }

        $matriz = array(
                    array(7,5,3),
                    array(9,1,8),
                    array(1,2,3),
                    array(4,6,8)
                    );

        Visualizar(Reordenar($matriz));
    }
?>