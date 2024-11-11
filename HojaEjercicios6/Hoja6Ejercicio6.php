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

        function FuncionA($c){

            $sum = 0;
            $cont= 0;

            foreach ($c as $key => $value){
                $sum+=$value['saldo'];
                $cont++;
            }

            $media=$sum/$cont;

            echo "Clientes con saldo inferior a la media: ";
            foreach ($c as $key => $value){
                if($value['saldo'] < $media){echo $value['nombre']." ".$value['apellido'].", ";}
            }
            echo "<br>";

        }

        function FuncionB($c){
            $cont=0;
 
            foreach ($c as $key => $value){
                if($value['saldo'] > 10000){
                    $personas[$cont] = $value['nombre']." ".$value['apellido'];
                }
                $cont++;
            }
            
            sort($personas,SORT_STRING);
            
            echo "Clientes con saldo superior a 10000 (ordenados alfabéticamente): ";
            for($k= 0 ; $k < count($personas); $k++){
                echo $personas[$k].", ";
            }
            echo "<br>";
        }

        function FuncionC($c){

            echo "Clientes que no son de Chiclana: ";
            foreach ($c as $key => $value) {
                if($value['ciudad'] != 'Chiclana'){
                    echo $value['nombre']." ".$value['apellido'].", ";
                }
            }
        }

        $clientes = array(
            array('numerocuenta' => '2034056',
                'nombre' => 'Antonio',
                'apellido' => 'Ruiz',
                'saldo' => 1000,
                'ciudad' => 'Chiclana'),
            array('numerocuenta' => '3465748',
                'nombre' => 'Maria',
                'apellido' => 'Torres',
                'saldo' => 38000,
                'ciudad' => 'Chiclana'),
            array('numerocuenta' => '4768584',
                'nombre' => 'Javier',
                'apellido' => 'Vaquero',
                'saldo' => 25000,
                'ciudad' => 'Conil'),
            array('numerocuenta' => '4876756',
                'nombre' => 'Laura',
                'apellido' => 'Moreno',
                'saldo' => 18000,
                'ciudad' => 'Medina')
        );
        
        FuncionA($clientes);
        FuncionB($clientes);
        FuncionC($clientes);
    }
?>