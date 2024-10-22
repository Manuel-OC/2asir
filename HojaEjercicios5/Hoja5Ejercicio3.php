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

        function VisualizarAlReves($frase){

            for ($i = strlen($frase)-1; $i >= 0; $i--){
                echo $frase[$i];
            }

        }

        $f = $_POST['frase'];

        VisualizarAlReves($f);
    }
?>