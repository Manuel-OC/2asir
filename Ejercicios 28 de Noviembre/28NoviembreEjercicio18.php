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

        function VisualizarA($paises,$equipos,$posiciones,$m){
            for($i = 0; $i < count($m); $i++){
                echo "Pais ".$paises[$i]."<br>";
                for($j = 0; $j < count($m[$i]); $j++){
                    echo ". Equipo ".$equipos[$j]."<br>";
                    for($k = 0; $k < count($m[$i][$j]); $k++){
                        echo ".     .   Posicion ".$posiciones[$k].": ";
                        echo $m[$i][$j][$k]."<br>";
                    }
                } 
            }
            echo "<br>";
        }

        function VisualizarB($paises,$equipos,$posiciones,$m){

            $cont1 = 0;
            $cont2 = 0;
            $cont3 = 0;

            foreach($m as $pais){
                echo "Pais ".$paises[$cont1]."<br>";
                foreach($pais as $equipo){
                    echo ". Equipo ".$equipos[$cont2]."<br>";
                    foreach($equipo as $posicion){
                        echo ".     .   Posicion ".$posiciones[$cont3].": ".$posicion."<br>";
                        $cont3++;
                    }
                    $cont2++;
                    $cont3=0;
                } 
                $cont2=0;
                $cont1++;
            }
            echo "<br>";
        }

        function VisualizarC($m){
            foreach($m as $key => $value){
                echo "Pais ".$key."<br>";
                foreach($value as $key2 => $value2){
                    echo ". Equipo ".$key2."<br>";
                    foreach($value2 as $key3 => $value3){
                        echo ".     .   Posicion ".$key3.": ".$value3."<br>";
                    }
                } 
            }
        }

        $mAB = array(
                array(
                    array('Frank','Pepe','Luis','Raul'),
                    array('Tiger','Mourin','Katz','Alberto')
                ),
                array(
                    array('Suarez','Koltz','Fernandez','Ramirez')
                ),
                array(
                    array('Higuita','Mel','Rubens','Messi'),
                    array('Kostenmeiner','Lenkins','Marash','Juanes')
                )
        );

        $mC = array(
            'España' => array(
                'Equipo1' => array(
                    'Portero' => 'Frank',
                    'Defensa' => 'Pepe',
                    'Medio' => 'Luis',
                    'Delantero' => 'Raul'
                ),
                'Equipo2' => array(
                    'Portero' => 'Tiger',
                    'Defensa' => 'Mourin',
                    'Medio' => 'Katz',
                    'Delantero' => 'Alberto'
                )
            ),
            'Mexico' => array(
                'Equipo1' => array(
                    'Portero' => 'Suarez',
                    'Defensa' => 'Koltz',
                    'Medio' => 'Fernandez',
                    'Delantero' => 'Ramirez'
                )
            ),
            'Argentina' => array(
                'Equipo1' => array(
                    'Portero' => 'Higuita',
                    'Defensa' => 'Mel',
                    'Medio' => 'Rubens',
                    'Delantero' => 'Messi'
                ),
                'Equipo2' => array(
                    'Portero' => 'Kostenmeiner',
                    'Defensa' => 'Lenkins',
                    'Medio' => 'Marash',
                    'Delantero' => 'Juanes'
                )
            )
        );

        $paises = ['España','Mexico','Argentina'];
        $equipos = ['Equipo1','Equipo2'];
        $posiciones = ['Portero','Defensa','Medio','Delantero'];

        VisualizarA($paises,$equipos,$posiciones,$mAB);
        VisualizarB($paises,$equipos,$posiciones,$mAB);
        VisualizarC($mC);

    }
?>