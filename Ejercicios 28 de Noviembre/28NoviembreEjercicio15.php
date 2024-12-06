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

        function VisualizarNotas($alumno){

            foreach ($alumno as $key => $value) {
                echo $key." -> ".$value."<br>";
            }

        }

        function VisualizarMejorMusica($mat){

            $alumno = '';
            $max = -9999;

            foreach ($mat as $key => $value) {
                if($value['Musica'] > $max){
                    $alumno=$key;
                    $max = $value['Musica'];
                }
            }

            echo "El alumno con mejor nota en música es ".$alumno." con un ".$max;
        }

        $matriz = array(
            'Pepe' => array(
                'Lengua' => 7,
                'Inglés' => 7,
                'Musica' => 8
            ),
            'Ana' => array(
                'Lengua' => 8,
                'Inglés' => 9,
                'Musica' => 6
            ),
            'Laura' => array(
                'Lengua' => 6,
                'Inglés' => 6,
                'Musica' => 9
            ),
        );

        VisualizarNotas($matriz['Ana']);
        VisualizarMejorMusica($matriz);
    }
?>