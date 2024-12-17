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

        function MatrizNotas($m){
            $nueva = array(
                array(-1,-1,-1),
                array(-1,-1,-1),
                array(-1,-1,-1)
            );
            $cont=0;

            for($i = 0 ; $i < count($m); $i++){
                for($j=2 ; $j< 5; $j++){
                    $nueva[$i][$cont] = $m[$i][$j];
                    $cont++;
                }
                $cont=0;
            }

            return $nueva;
        }

        function Visualizar($m){
            for($i = 0; $i < count($m); $i++){
                for($j = 0; $j < count($m[$i]); $j++){
                    echo $m[$i][$j];
                }
                echo "<br>";
            }

            foreach ($m as $value) {
                foreach($value as $elemento){
                    echo $elemento;
                }
                echo "<br>";
            }
        }

        function Medias($m){
            $medias;

            for($i = 0 ;$i < count($m);$i++){
                $medias[$i] = array_sum($m[$i])/count($m[$i]);
            }

            return $medias;
        }

        function ApartadoC($m){

            $medias = Medias(MatrizNotas($m));

            for($i = 0; $i <count($m);$i++){
                echo $m[$i][0].", ".$m[$i][1].", ".$medias[$i]."<br>";
            }

        }

        $m = array(
            array(1,'Lolo',7,4,5),
            array(2,'Migue',8,1,9),
            array(3,'JuanDiego',6,8,3)           
        );

        Visualizar(MatrizNotas($m));
        ApartadoC($m);
    }
?>