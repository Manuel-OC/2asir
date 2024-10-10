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
        
        $cont1 = 3;
        $cont2 = 0;

        while ($cont1 <= 6){
            while ($cont2 <= 10){
                echo $cont1." x ".$cont2." = ".$cont1*$cont2;
                echo "<br>";
                $cont2++;
            }
            echo "<br>";
            $cont2 = 0;
            $cont1++;
        }
    
    }
?>