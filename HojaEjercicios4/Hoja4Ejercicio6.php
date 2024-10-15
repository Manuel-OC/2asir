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

        function Contar($v){
            $veces = array(0,0,0,0,0,0,0,0,0);

            for($i = 0; $i < count($v); $i++){
                if($v[$i] > 9 && $v[$i] < 99 && $v[$i]%10 == 0){
                    $veces[$v[$i]/10-1]++;
                }
            }

            return $veces;
        }

        function Visualizar($r){
            for ($i = 0; $i < count($r); $i++){
                $a=($i+1)*10;
                echo "El numero ".$a." aparece ".$r[$i]." veces<br>";
            }
        }

        $tabla = array(45,56,90,35,10,90,40,54,33,21,70,90,10,15,60);
        Visualizar(Contar($tabla));

    }
?>