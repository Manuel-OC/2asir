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

        $v1 = array(7,5,3,5,2,8,3,9);
        $v2 = array(3,4,7,1,5,7,9,2);

        for($i = 0; $i < count($v1) ; $i++){
            $v3[$i] = $v2[$i]+$v1[$i];
        }

        for($i = 0; $i < count($v3) ; $i++){
            echo $v3[$i].",";
        }

    }
?>