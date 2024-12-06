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

        function Rotacion($v,$i,$f){

            $burbuja = $v[$i];
            for($i = 0; $i < $f; $i++){
                $v[$i] = $v[$i+1];
            }
            $v[$f] = $burbuja;

            return $v;

        }

        function Visualizar($r){
            for($i = 0; $i < count($r); $i++){
                echo $i." -> ".$r[$i]."<br>";
            }
            echo "<br>";
        }

        $vector = array(6,3,7,2,5,3,4,5,9,1);
        $inicial = 0;
        $final = 9;

        Visualizar($vector);
        Visualizar(Rotacion($vector,$inicial,$final));


    }

?>