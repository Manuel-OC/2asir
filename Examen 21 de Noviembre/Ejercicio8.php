<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="text" name="frase">
        <input type="text" name="palabra">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function ContienePalabra($frase,$palabra){

            $contenida = false;

            for($i = 0; $i < count($frase); $i++){
                if($frase[$i] == $palabra){
                    $contenida = true;
                    break;
                }
            }

            return $contenida;
        }

        function Visualizar($f,$p,$r){
            if($r){
                echo "La frase '".$f."' contiene la palabra '".$p."'";
            }else{
                echo "La frase '".$f."' NO contiene la palabra '".$p."'";
            }
            
        }

        $f = $_POST['frase'];
        $p = $_POST['palabra'];
        $vector = explode(" ", $f);

        Visualizar($f,$p,ContienePalabra($vector,$p));

    }
?>