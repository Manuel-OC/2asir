<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <br>
        <input type="number" name="n2">
        <br>
        <input type="number" name="n3">
        <br>
        <input type="number" name="n4">
        <br>
        <input type="number" name="n5">
        <br>
        <input type="number" name="n6">
        <br>
        <input type="number" name="n7">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function HayTresNueves(){
            $cont = 0;

            for ($i = 1 ; $i <= 7 ; $i++){
                if($_POST['n'.$i] == 9){
                    $cont++;
                }
            }

            if($cont == 3){return true;}
            else{return false;}
            
        }

        function HayDosPares(){
            $cont = 0;

            for ($i = 1 ; $i <= 7 ; $i++){
                if($_POST['n'.$i]%2 == 0){
                    $cont++;
                }
            }

            if($cont == 2){return true;}
            else{return false;}
        }

        function EsPrimo($num){
            $cont = 0;

            for($i = $num-1 ; $i > 1 ; $i--){
                if($num%$i == 0){
                    $cont++;
                }
            }

            if($cont == 0){return true;}
            else{return false;}
        }

        function HayUnPrimo(){
            for ($i = 1 ; $i <= 7 ; $i++){
                if(EsPrimo($_POST['n'.$i])){
                    return true;
                    break;
                }
            }
        }

        function Visualizar($a,$b,$c){
            if($a && $b && $c){
                echo "SI";
            }else{
                echo "NO";
            }
        }

        Visualizar(HayTresNueves(),HayDosPares(),HayUnPrimo());
    
    }
?>