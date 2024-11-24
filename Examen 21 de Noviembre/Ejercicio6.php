<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="number" name="n3">
        <input type="number" name="n4">
        <input type="number" name="n5">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function SolicitarDatos(){

            for($i = 1; $i <= 5; $i++){
                $numeros[$i]=$_POST['n'.$i];
            }

            return $numeros;

        }

        function Calculos($entrada,&$mayor,&$menor,&$media){

            $mayor = max($entrada);
            $menor = min($entrada);
            $media = array_sum($entrada)/count($entrada);

        }

        function Visualizar($mayor,$menor,$media){
            echo "El mayor es: ".$mayor."<br>"."El menor es: ".$menor."<br>"."La media es: ".$media;
        }

        $entrada=SolicitarDatos();

        $mayor = -9999;
        $menor = 9999;
        $media = 0;

        Calculos($entrada,$mayor,$menor,$media);

        Visualizar($mayor,$menor,$media);

    }
?>