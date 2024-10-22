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

        function MayorNota($n){

            $minNota = 99999;
            $asig = '';

            foreach($n as $clave => $valor){
                if($valor < $minNota){
                    $minNota = $valor;
                    $asig = $clave;
                }
            }

            return $asig;
        }

        function Visualizar($r){echo $r;}

        $notas = array(
                    'Matematicas' => 6,
                    'Lengua' => 5,
                    'Inglés' => 8,
                    'Informática' => 7
        );

        Visualizar(MayorNota($notas));
    }
?>