<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="text" name="frase">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($fr){
            echo $fr;
        }

        $f = $_POST['frase'];

        Visualizar(strrev($f));
    }
?>