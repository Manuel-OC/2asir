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
        
        for ($i = 1 ; $i <= 6 ; $i++){
            for ($j = 1 ; $j <= $i ; $j++){
                echo "*";
            }
            echo "<br>";
        }
    
    }
?>