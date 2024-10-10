<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        $numero = 1;

        echo $numero.",";
        for($i = 1 ; $i <= $_POST['n']-1 ; $i++){
            if($i%2 == 1){
                $numero+=4;
                echo $numero.",";
            }else{
                $numero-=2;
                echo $numero.",";
            }
        }
    
    }
?>