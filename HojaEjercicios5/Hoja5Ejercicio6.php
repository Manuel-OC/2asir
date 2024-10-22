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

        function Inverso($v){

            for($i = count($v)-1; $i >= 0; $i--){
                echo $v[$i]." ";
            }

            echo "<br>";

        }

        function PalabraMasLarga($v){

            $max = -1;

            for($i = 0; $i < count($v); $i++){
                if(strlen($v[$i]) > $max){
                    $max = strlen($v[$i]);
                    $palabra = $v[$i];
                }
            }

            return $palabra;

        }

        function Visualizar($r){echo "Palabra mas larga: ".$r;}

        $f = $_POST['frase'];
        $vector = explode(" ", $f);

        Inverso($vector);
        Visualizar(PalabraMasLarga($vector));

    }
?>