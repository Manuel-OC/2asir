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

        function VisualizarA($idiomas,$m){
            $cont = 0;
            for($i = 0; $i < count($m); $i++){
                for($j = 1; $j < count($m[$i]); $j++){
                    echo "En el nivel ".$m[$i][0]." del idioma ".$idiomas[$cont]." hay ".$m[$i][$j]." alumnos <br>";
                    $cont++;
                }
                $cont=0;
            }
            echo "<br>";
        }
        
        function VisualizarB($m){
            for($i = 0; $i < count($m); $i++){
            	$nivel = $m[$i]['Nivel'];
                foreach($m[$i] as $key => $value){
                	echo "En el nivel ".$nivel." del idioma ".$key." hay ".$value." alumnos <br>";
                }
            }
            echo "<br>";
        }

        function VisualizarC($m){
        
    			foreach ($m as $key => $value) {
    				foreach ($value as $keyy => $valuee) {
    					echo "En el nivel ".$key." del idioma ".$keyy." hay ".$valuee." alumnos <br>";
    				}
    			}
        }

        $mA = [
                ['Basico',4,7,2,8],
                ['Medio',6,3,8,1],
                ['De perfeccionamiento',2,5,7,3]
        ];        

        $mB = array(
                ['Nivel' => 'Basico',
                	'Ingles' => 4,
                	'Fraces' =>7,
                	'Aleman'=> 2,
                	'Ruso' =>8],
                ['Nivel' => 'Medio',
                	'Ingles' => 6,
                	'Frances' => 3,
                	'Aleman' => 8,
                	'Ruso' => 1],
                ['Nivel' => 'De perfeccionamiento',
                	'Ingles' => 2,
                	'Frances' => 5,
                	'Aleman' => 7,
                	'Ruso' => 3]
        );

        $mC = [
                'Basico' => array('Ingles' => 4,
                	'Fraces' =>7,
                	'Aleman'=> 2,
                	'Ruso' =>8),
                'Medio' => array('Ingles' => 6,
                	'Frances' => 3,
                	'Aleman' => 8,
                	'Ruso' => 1),
                'De perfeccionamiento' => array('Ingles' => 2,
                	'Frances' => 5,
                	'Aleman' => 7,
                	'Ruso' => 3)
        ];

        $idiomas = ['Ingles','Frances','Aleman','Ruso'];

        VisualizarA($idiomas,$mA);
        VisualizarB($mB);
        VisualizarC($mC);

    }
?>
