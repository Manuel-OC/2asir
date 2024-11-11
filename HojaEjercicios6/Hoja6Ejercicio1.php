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

        function obtenerIniciales($frase){

            for ($i = 0; $i  < count($frase); $i++){
                $palabra[$i]=substr($frase[$i],0,1);
            }

            return $palabra;
        }

        function Ordenar($frase){
            sort($frase,SORT_STRING);

            return obtenerIniciales($frase); 
        }

        function Visualizar($r){
            echo "Palabra: ";
            for($i=0; $i<count($r);$i++){
                echo $r[$i];
            }
            echo "<br>";
        }

        $f = ["hola","me","llamo","nolín","encantado"];

        Visualizar(obtenerIniciales($f));
        Visualizar(Ordenar($f));
    }
?>