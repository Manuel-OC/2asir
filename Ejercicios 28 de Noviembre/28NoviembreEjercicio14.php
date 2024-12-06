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

    	function Media($m){

    		$sum = 0;
    		$n = 0;

    		for($i = 1; $i < count($m)-1; $i++){
    			for($j = 1; $j < count($m[$i])-1; $j++){
    				$sum+=$m[$i][$j];
    				$n++;
    			}
    		}

    		$med = $sum/$n;

    		return $med;
    	}

    	function Visualizar($r){
    		echo "La media es: ".$r;
    	}

    	$matriz = array(
    		array(1,2,33,4),
    		array(55,7,73,80),
    		array(9,101,11,12),
    		array(13,144,15,16)
    	);

    	Visualizar(Media($matriz));

    }
?>