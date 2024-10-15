<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="numero">
        <input type="number" name="posicion">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($v){
            for($i = 0; $i < count($v); $i++){
                echo $v[$i].", ";
            }
        }

        $vector = array(1,2,3,2,5,6,7,8,2,10,2,12,3,11,45);
        $vector[$_POST['posicion']-1] = $_POST['numero'];

        Visualizar($vector);
    
    }
?>