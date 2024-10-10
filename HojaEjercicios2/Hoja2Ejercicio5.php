<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Introduce el numero menor:
        <input type="number" name="n1">
        <br>
        Introduce el numero mayor:
        <input type="number" name="n2">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
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

        for($i = $_POST['n1']+1 ; $i <= $_POST['n2']-1 ; $i++){
            if(EsPrimo($i)){
                echo $i.", ";
            }
        }
    
    }
?>