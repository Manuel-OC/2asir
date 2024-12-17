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

    	function ObtenerIniciales($v){

            for($i = 0; $i < count($v); $i++){
                echo $v[$i][0];
            }
            echo "<br>";

        }

        function VerPalabras($m){
            for($i = 0; $i < count($m); $i++){
                for($j = 0; $j < count($m[$i]); $j++){
                    echo $m[$i][$j]." ";
                }
            }
        }

        $matriz = array(
            array('hola','adios','gracias','lolo','comida'),
            array('eso','juego','yo','cada','dia'),
            array('bueno','adios','ordenador','casa','perro')
        );

        ObtenerIniciales($matriz[0]);
        ObtenerIniciales($matriz[1]);
        ObtenerIniciales($matriz[2]);

        VerPalabras($matriz);

    }
?>