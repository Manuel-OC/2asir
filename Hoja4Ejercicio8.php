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

        function Contar(&$cEsp,&$cMin,&$cMay){

            $frase = $_POST['frase'];
            
            for ($i = 0; $i < strlen($frase); $i++){
                if($frase[$i] >= 'a' && $frase[$i] <= 'z'){
                    $cMin++;
                }
            }

            for ($i = 0; $i < strlen($frase); $i++){
                if($frase[$i] >= 'A' && $frase[$i] <= 'Z'){
                    $cMay++;
                }
            }

            for ($i = 0; $i < strlen($frase); $i++){
                if($frase[$i] == ' '){
                    $cEsp++;
                }
            }

        }

        function Visualizar(&$cEsp,&$cMin,&$cMay){
            echo "Hay ".$cMin." minúsculas, ".$cMay." mayúsculas y ".$cEsp." espacios";
        }

        $countEsp = 0;
        $countMin = 0;
        $countMay = 0;
        
        Contar($countEsp,$countMin,$countMay);
        Visualizar($countEsp,$countMin,$countMay);
    }
?>