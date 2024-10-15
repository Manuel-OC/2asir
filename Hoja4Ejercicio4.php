<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Posicion($v,$n){
            
            for($i = 0; $i < count($v); $i++){
                if($v[$i] == $n){
                    echo "El elemento ".$n." esta en la posición ".$i+1;
                }
            }

        }

        $vector = array(1,2,3,2,5,6,7,8,2,10,2,12);
        $numero = $_POST['n'];

        Posicion($vector,$numero);
    
    }
?>