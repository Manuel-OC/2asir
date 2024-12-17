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

        function Visualizar($fprima){
            for($i = 0 ; $i < count($fprima)-1; $i++){
                echo $fprima[$i]." ";
            }
            echo "<br>";
        }

        function Corregir($f){
            $cont=0;
            for($i = 0 ;$i < strlen($f)-1;$i++){
                if($f[$i]==$f[$i+1]){
                    for($j = $i ; $j < strlen($f)-1 ;$j++){
                        $f[$j]=$f[$j+1];
                    }
                    $cont++;
                }
            }
            for($i = 0; $i < strlen($f)-($cont/2); $i++){
                echo $f[$i];
            }
        }

        $f = $_POST['frase'];
        $fprima = explode(' ',$f);
        $otraf=$_POST['frase'];
        
        Visualizar($fprima);
        Corregir($otraf);
    }
?>