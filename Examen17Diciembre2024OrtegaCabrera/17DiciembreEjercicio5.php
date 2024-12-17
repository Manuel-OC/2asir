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

    	function GenerarMatriz(){
            $cont=0;
            $matriz = array(
                array(0,0,0,0,0),
                array(0,0,0,0,0),
                array(0,0,0,0,0),
                array(0,0,0,0,0),
                array(0,0,0,0,0)
            );

            for($i = 0; $i < 5 ; $i++){
                for($j = 0; $j < 5; $j++){
                    if($i%2==0){
                        $cont++;
                        $matriz[$i][$j] = $cont;
                    }else{
                        $matriz[$i][$j] = $cont;
                        $cont--;
                    }
                }
            }

            return $matriz;
        }

        function MediaDiagonal($m){
            $sum = 0;
            for($i = 0; $i < count($m); $i++){
                $sum+=$m[$i][$i];
            }
            $media = $sum/count($m);

            echo "La media es ".$media;
        }

        function Visualizar($m){
            for($i = 0 ; $i < count($m); $i++){
                for($j = 0; $j < count($m[$i]); $j++){
                    echo $m[$i][$j];
                }
                echo "<br>";
            }
        }

        Visualizar(GenerarMatriz());
        MediaDiagonal(GenerarMatriz());

    }
?>