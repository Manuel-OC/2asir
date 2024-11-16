<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="date" name="fecha">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($r){
            if($r){
                echo "La fecha es válida <br>";
            }else{
                echo "La fecha NO es válida <br>";
            }
        }

        $fecha = $_POST['fecha'];

        $vectorfecha = explode('-',$fecha);

        Visualizar(checkdate($vectorfecha[1], $vectorfecha[2], $vectorfecha[0]));
        Visualizar(checkdate(13,45,19000));

    }
?>