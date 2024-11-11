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

        function DiaMasLluvia($v){

            $max = -1;
            $i=0;
            $conts = [0,0,0,0,0];
            $dias = ['lunes','martes','miercoles','jueves','viernes'];

            foreach ($v as $key1 => $value1) {
                $conts[0]+=$value1['lunes'];
                $conts[1]+=$value1['martes'];
                $conts[2]+=$value1['miercoles'];
                $conts[3]+=$value1['jueves'];
                $conts[4]+=$value1['viernes'];
            }

            for ($i = 0; $i <= 4; $i++){
                if($conts[$i] > $max){
                    $max=$conts[$i];
                    $dia = $dias[$i];
                }
            }

            echo "El día con más lluvia ha sido: ".$dia."<br>";

        }

        function CiudadMasLluvia($v){
            $max = -1;

            foreach ($v as $key1 => $value1) {
                $cont = 0;
                foreach ($value1 as $key2 => $value2) {
                    $cont+=$value2;
                }
                if($cont > $max){
                    $ciudad = $key1;
                    $max=$cont;
                }
            }

            echo "La ciudad con más lluvia ha sido: ".$ciudad."<br>";
        }

        $matriz = array(
                        "Cadiz" => array(
                                        "lunes" => 30,
                                        "martes" => 80,
                                        "miercoles" => 130,
                                        "jueves" => 10,
                                        "viernes" => 120
                                        ),
                        "San Fernando" => array(
                                        "lunes" => 180,
                                        "martes" => 40,
                                        "miercoles" => 60,
                                        "jueves" => 50,
                                        "viernes" => 100
                                        ),
                        "Chiclana" => array(
                                        "lunes" => 80,
                                        "martes" => 10,
                                        "miercoles" => 190,
                                        "jueves" => 10,
                                        "viernes" => 30
                                        )
                    );

        DiaMasLluvia($matriz);
        CiudadMasLluvia($matriz);

    }
?>