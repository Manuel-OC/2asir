<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        $elemento = 1;
        echo $elemento.", ";

        for ($i = 0 ; $i < $_POST['n1']-1 ; $i++){
            if($i%2 == 1){
                $elemento/=2;
            }else{
                $elemento = $elemento + 5 + $i;
            }
            echo $elemento.", ";
        }
    
    }
?>