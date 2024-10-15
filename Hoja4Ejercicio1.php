<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="text" name="frase"></br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function contarLetras($fA){
            $contA = 0;

            for($i = 0; $i <= strlen($fA)-1 ; $i++){
                if(($fA[$i] >= 'a' && $fA[$i] <= 'z') || ($fA[$i] >= 'A' && $fA[$i] <= 'Z')){
                    $contA++;
                }
            }

            return $contA;
        }

        function contarNumeros($fB){
            $contB = 0;

            for($j = 0; $j <= strlen($fB)-1 ; $j++){
                if($fB[$j] >= '0' && $fB[$j] <= '9'){
                    $contB++;
                }
            }

            return $contB;
        }

        function Visualizar($rA,$rB){
            echo "La frase tiene ".$rA." letras y ".$rB." numeros";
        }

        $f = $_POST['frase'];

        Visualizar(contarLetras($f),contarNumeros($f));
    
    }
?>