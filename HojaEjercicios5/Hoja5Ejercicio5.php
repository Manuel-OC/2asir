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

        function SumaFilas($m){

            $indice = 0;

            for($i = 0; $i < count($m); $i++){
                $t[$indice] = 0;
                for($j = 0; $j < count($m[$i]); $j++){
                    $t[$indice]+=$m[$i][$j];
                }
                $indice++;
            }

            return $t;
        }

        function Visualizar($r){
            for($i = 0; $i < count($r); $i++){
                echo "Suma de fila ".$i." = ".$r[$i]."<br>";
            }
        }

        function VisualizarMayorSuma($r){
            
            $mayor = -1;

            for($i = 0; $i < count($r); $i++){
                if($r[$i] > $mayor){
                    $mayor = $r[$i];
                    $m = $i;
                }
            }

            switch ($m) {
                case 0:
                    echo "primera";
                    break;
                case 1:
                    echo "segunda";
                    break;
                case 2:
                    echo "tercera";
                    break;
                case 3:
                    echo "cuarta";
                    break;
                default:
                    echo "ERROR";
                    break;
            }
        }

        $mat = array(
                    array(1,2,3,4,5),
                    array(2,4,1,6,0),
                    array(6,7,4,8,9),
                    array(1,1,5,2,3)
        );

        $tab = SumaFilas($mat);
        Visualizar($tab);
        VisualizarMayorSuma($tab);
    }
?>