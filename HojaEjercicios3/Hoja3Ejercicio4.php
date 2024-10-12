<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="base1">
        <input type="number" name="exponente1">
        <input type="number" name="base2">
        <input type="number" name="exponente2">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function Exponencial($b,$e){
            $r = 1;
            for($i = 0; $i <= $e-1; $i++){
                echo "$b * ";
                $r*=$b;
            }
            echo "= ".$r."<br>";
            return $r;
        }

        function CualEsMayor($a,$b){
            if($a > $b){
                echo "El primero (".$a.") es mayor que el segundo (".$b.")";
            }elseif($a < $b){
                echo "El segundo (".$b.") es mayor que el primero (".$a.")";
            }else{
                echo $b." y ".$a." son iguales";
            }
        }

        CualEsMayor(Exponencial($_POST['base1'],$_POST['exponente1']),Exponencial($_POST['base2'],$_POST['exponente2']));
    
    }
?>