<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="numero">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($r,$num){
            echo "El carácter con código ASCII ".$num." es '".$r."'";
        }

        $n = $_POST['numero'];

        Visualizar(chr($n),$n);
    }
?>