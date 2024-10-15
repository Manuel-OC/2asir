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

        function CambiarOrden($o){
            $nuevo = array();
            $cont = 0;

            for($i = count($o)/2; $i < count($o); $i++){
                $nuevo[$cont] = $o[$i];
                $cont++;
            }
            
            for($i = 0; $i < count($o)/2; $i++){
                $nuevo[$cont] = $o[$i];
                $cont++;
            }

            return $nuevo;
        }

        function Visualizar($v){
            for($i = 0; $i <= count($v)-1 ; $i++){
                echo $v[$i].",";
            }
        }

        $original = array(1,2,3,4,5,6,7,8,9,10);

        Visualizar(CambiarOrden($original));
    
    }
?>