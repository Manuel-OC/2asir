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
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function resta($n1,$n2){

            if ($n1-$n2 >= $n2){
                return 1+resta($n1-$n2,$n2);
            }else{
                return 1;
            }

        }

        function Visualizar($r){echo $r;}

        Visualizar(resta($_POST['n1'],$_POST['n2']));
    
    }
?>