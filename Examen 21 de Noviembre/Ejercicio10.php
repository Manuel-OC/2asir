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

        function SumaDivisores($n){
            $sum = 0;
            for($i = $n-1 ; $i > 0 ; $i--){
                if($n%$i==0){
                   $sum+=$i; 
                }
            }
            return $sum;
        }

        function VectorDivisores($tab1){
            for($j = 0; $j < count($tab1); $j++){
                $tab2[$j] = SumaDivisores($tab1[$j]);
            }
            return $tab2;
        }

        function Visualizar($r){
            for($k = 0; $k < count($r); $k++){
                echo $r[$k].", ";
            }
        }

        $tab1 = array(12,21,48,63,84,74,42,30);

        Visualizar(VectorDivisores($tab1));

    }
?>