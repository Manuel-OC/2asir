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

        function GuardarPos($v){
            
            $indice = 0;

            for ($i = 0;  $i < count($v); $i++){
                if($v[$i] > 0){
                    $tabPos[$indice] = $v[$i];
                    $indice++;
                }
            }

            return $tabPos;
        }

    	function GuardarNeg($v){
    		
            $indice = 0;

    		for ($i = 0;  $i < count($v); $i++){
    			if($v[$i] < 0){
    				$tabNeg[$indice] = $v[$i];
                    $indice++;
    			}
    		}

            return $tabNeg;
    	}

    	function Visualizar($v){

    		for($i = 0; $i < count($v); $i++){
                echo $v[$i].", ";
            }

            echo "<br>";
    	}

		$tab = array(4,-5,5,7,1,-8,9,-10,4,15);
		
		Visualizar(GuardarPos($tab));
		Visualizar(GuardarNeg($tab));
	}
?>