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

        function OrdenAscii($f){

            $palabras = (explode(' ',$f));
            sort($palabras,SORT_REGULAR);
            
            return $palabras;
        }

        function SustituirPares($f){

            $result = implode('', $f);

            for($i = 0; $i < strlen($result); $i++){
                if($i%2==0){
                    $result[$i] = '*';
                }
            }

            return $result;
        }

        function Visualizar1($r){
            for($i = 0; $i < count($r); $i++){
                echo $r[$i]." ";
            }
            echo "<br>";
        }

        function Visualizar2($r){
            for($i = 0; $i < strlen($r); $i++){
                echo $r[$i]." ";
            }
            echo "<br>";
        }

        $frase = "Hoy no es domingo";

        Visualizar1(OrdenAscii($frase));
        Visualizar2(SustituirPares(OrdenAscii($frase)));

    }
?>