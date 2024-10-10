<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Introduce un numero:
        <input type="number" name="n1">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        for ($i = $_POST['n1'] ; $i >= 1 ; $i--){
            if($_POST['n1']%$i == 0){ echo $i.", "; }
        }
    
    }
?>