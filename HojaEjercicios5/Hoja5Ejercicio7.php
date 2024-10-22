<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Numero de cuenta:
        <input type="text" name="numerocuenta">
        Con nombre:
        <input type="radio" name="ver" value="con">
        Sin nombre:
        <input type="radio" name="ver" value="sin">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function FuncionA($b){

            $existe = false;

            for($i = 0; $i < count($b); $i++){
                if($b[$i]['cuenta'] == $_POST['numerocuenta']){
                    $existe = true;
                    $indice = $i;
                    break;
                }
            }

            if($existe){
                echo "Existe la cuenta";
                if($_POST['ver'] == 'con'){
                    echo " y es de ".$b[$indice]['nombre'];
                }
            }else{
                echo "No existe la cuenta";
            }

            echo "<br>";

        }

        function FuncionB($b){
            
            $sum = 0;
            $count = 0;

            for($i = 0; $i < count($b); $i++){
                $sum+=$b[$i]['saldo'];
                $count++;
            }

            $media = $sum/$count;
            echo "Media de salarios: ".$media."<br>";

        }

        function FuncionC($b){
            
            for($i = 0; $i < count($b); $i++){
                if($b[$i]['saldo'] > 30000){
                    echo $b[$i]['cuenta']." - ".$b[$i]['nombre']."<br>";
                }
            }

        }

        $banco = array(
                    array('cuenta' => '2034056',
                        'nombre' => 'Antonio Gonzalez',
                        'saldo' => 1000),
                    array('cuenta' => '3465748',
                        'nombre' => 'Maria Torres',
                        'saldo' => 38000),
                    array('cuenta' => '4768584',
                        'nombre' => 'Javier Vaquero',
                        'saldo' => 25000),
                    array('cuenta' => '4876756',
                        'nombre' => 'Laura Moreno',
                        'saldo' => 18000)
        );

        FuncionA($banco);
        FuncionB($banco);
        FuncionC($banco);

    }
?>