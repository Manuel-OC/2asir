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
        
        //Recibe la dirección del vector y modifica los negativos a positivos
	function Modificar(&$m){
		for($i=0;$i<count($m);$i++){
			for($k = 0; $k < count($m[$i]); $k++){
				if($m[$i][$k] < 0){
					$m[$i][$k]=-$m[$i][$k];
				}
			}
		}
	}
	
	//Visualiza el vector
	function Visualizar($mat){
		for($j = 0; $j < count($mat) ; $j++){
			for($l = 0; $l < count($mat[$j]); $l++){
				echo $mat[$j][$l].", ";
			}
			echo "<br>";
		}
	}
	
	$matriz = array(
			array(4,2,-7,5,-3,9),
			array(7,1,-9,-2,8,-4),
			array(-4,-1,-3,8,5,0)
		);
	
	Modificar($matriz);
	Visualizar($matriz);
    
    }
?>
