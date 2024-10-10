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
        
        function Factorial($num){
            $result = 1;

            for($i = 1 ; $i <= $num ; $i++){
                $result*=$i;
            }

            return $result;
        }

        $num = 1;

        while(Factorial($num) < 50000){
            echo "Imprimo ".$num." porque su factorial es ".Factorial($num)."<br>";
            $num++;
        }

        echo "El número más pequeño cuyo factorial supera a 50000 es: ".$num." (".Factorial($num).")";
    
    }
?>