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
        
        $cont1 = 1;
        $cont2 = 1;

        do {
            do{
                echo "*";
                $cont2++;
            } while ($cont2 <= $cont1);
            echo "<br>";
            $cont2 = 1;
            $cont1++;
        } while ($cont1 <= 6);
    
    }
?>