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

        function Visualizar($idiomas,$m){
            $cont = 0;
            for($i = 0; $i < count($m); $i++){
                for($j = 1; $j < count($m[$i]); $j++){
                    echo "En el nivel ".$m[$i][0]." del idioma ".$idiomas[$cont]." hay ".$m[$i][$j]." alumnos <br>";
                    $cont++;
                }
                $cont=0;
            }
            echo "<br>";
        }

        $mA = [
                ['Basico',4,7,2,8],
                ['Medio',6,3,8,1],
                ['De perfeccionamiento',2,5,7,3]
        ];        

        $mB = array(
                array('Basico',4,7,2,8),
                array('Medio',6,3,8,1),
                array('De perfeccionamiento',2,5,7,3)
        );

        $mC = [
                array('Basico',4,7,2,8),
                array('Medio',6,3,8,1),
                array('De perfeccionamiento',2,5,7,3)       
        ];

        $idiomas = ['Ingles','Frances','Aleman','Ruso'];

        Visualizar($idiomas,$mA);
        Visualizar($idiomas,$mB);
        Visualizar($idiomas,$mC);

    }
?>