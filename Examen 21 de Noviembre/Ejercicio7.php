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


    	function Diferencia($tab){

    		$max=-1;
    		$min=999999;

    		for($i = 0; $i < count($tab); $i++){
    			if($tab[$i] > $max){
    				$max = $tab[$i];
    			}
    		}
    		for($i = 0; $i < count($tab); $i++){
    			if($tab[$i] < $min){
    				$min = $tab[$i];
    			}
    		}

    		$diferen = $max-$min;

    		return $diferen;

    	}

    	function BuscarFila($m){

    		$minDife = 99999;

    		for($j = 0; $j < count($m); $j++){
    			$r = Diferencia($m[$j]);
    			if ($r < $minDife){
    				$minDife = $r;
    				$fila = $j;
    			}
    		}

    		return $fila;

    	}

    	function Visualizar($mat,$f){
    		for($k = 0; $k < count($mat[$f]); $k++){
    			echo $mat[$f][$k].", ";
    		}
    	}

    	$matriz = array(
    		array(2,5,4,200),
    		array(12,5,7,10),
    		array(88,2,500,10)
    	);

    	$filita = BuscarFila($matriz);
    	Visualizar($matriz,$filita);
    }

?>