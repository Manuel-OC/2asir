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
	function Modificar(&$v){
		for($i=0;$i<count($v);$i++){
			if($v[$i] < 0){
				$v[$i]=-$v[$i];
			}
		}
	}
	
	//Visualiza el vector
	function Visualizar($v){
		for($j = 0; $j < count($v) ; $j++){
			echo $v[$j].", ";
		}
	}
	
	$vector = array(4,2,-7,5,-3,9);
	
	Modificar($vector);
	Visualizar($vector);
    
    }
?>
