<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="text" name="caracter">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($r,$car){
            echo "El código ASCII de ".$car." es '".$r."'";
        }

        $c = $_POST['caracter'];

        Visualizar(ord($c),$c);
    }
?>