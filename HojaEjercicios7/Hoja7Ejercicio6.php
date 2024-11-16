<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($vec){
            for ($i = 0; $i < count($vec); $i++){
                echo $vec[$i],", ";
            }
        }

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        Visualizar(range($n1,$n2));
    }
?>