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

	function Comprobar($m) {
	
		$cont=0;
		$capicua = [true,true,true];

		for($i = 0; $i < count($m);$i++){
			for($j = 0; $j < count($m[$i]) ; $j++){
				if($m[$i][0+$cont] != $m[$i][4-$cont]){
					$capicua[$i] = false;
				}
				$cont++;
			}
			$cont=0;
		}

		return $capicua;
	}

	function MediaEsCero($m) {
		$medianula = [false,false,false];

		for($i = 0; $i < count($m);$i++){
			$media = array_sum($m[$i])/count($m[$i]);
			if($media == 0){
				$medianula[$i] = true;
			}
		}

		return $medianula;
	}
	
	function Visualizar ($vector) {
		for($i = 0; $i < count($vector); $i++){
			if($vector[$i] == true){
				echo "La fila ".$i." es capicua <br>";
			}
		}
	}

	function VisualizarB($vector) {
		for($i = 0; $i < count($vector); $i++){
			if($vector[$i] == true){
				echo "La media de la fila ".$i." es cero <br>";
			}
		}
	}

	$matriz = array(
		array(3,6,5,4,8),
		array(1,2,3,2,1),
		array(-7,3,4,-2,2)
	);
	
	Visualizar(Comprobar($matriz));
	VisualizarB(MediaEsCero($matriz));

    }
?>