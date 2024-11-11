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

        function ObtenerMayor($tab,$id){
            $max=-1;

            for($i = 0; $i < count($tab); $i++){
                if($tab[$i] > $max){
                    $max = $tab[$i];
                }
            }

            if($id != 3){echo "El numero más grande del vector ".$id." es: ".$max."<br>";}
            else{echo "El número más grande de entre ambos vectores es: ".$max."<br>";}

            return $max;
        }

        function HayTresCeros($tab,$id){
            $cont=0;

            for($j = 0; $j < count($tab); $j++){
                if($tab[$j] == 0){$cont++;}
            }

            if($cont >= 3){echo "El vector ".$id." tiene 3 ceros <br>";}
            else{echo "El vector ".$id." NO tiene 3 ceros <br>";}
        }

        $v1 = [0,4,7,2,0,8,9,0,1];
        $v2 = [3,6,4,0,8,5,3,0,1];

        $v3[0]=ObtenerMayor($v1,1);
        $v3[1]=ObtenerMayor($v2,2);
        ObtenerMayor($v3,3);
        HayTresCeros($v1,1);
        HayTresCeros($v2,2);

    }
?>