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
        
        function DosAA(){
            $i = 50;
            while ($i >= 40){
                echo $i.", ";
                $i--;
            }
        }

        function DosAB(){
            $contador = 1;
            while ($contador <= 5){
                $x = $contador*2;
                echo $x.", ";
                $contador++;
            }
        }

        function DosBA(){
            for($k = 50 ; $k <= 500 ; $k += 25){
                echo $k.", ";
            }
        }

        function DosBB(){
            for($j = 100 ; $j <= 500 ; $j += 100){
                $control = $j/20;
                echo $control.", ";
            }
        }

        DosAA();
        echo "<br>";
        DosAB();
        echo "<br>";
        DosBA();
        echo "<br>";
        DosBB();
    
    }
?>