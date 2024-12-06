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

	function Comparar ($tab1,$tab2) {
	
		$tab3 = array();
		$cont=0;
		for($i = 0; $i < count($tab1) || $i < count($tab2) ; $i++){
			if($tab1[$i] != $tab2[$i]){
				$tab3[$cont] = $tab1[$i];
				$cont++;
				$tab3[$cont] = $tab2[$i];
				$cont++;
			}
		}
		
		return $tab3;
	}
	
	function Visualizar ($vector) {
		for($i = 0; $i < count($vector); $i++){
			echo $vector[$i].", ";
		}
	}

	$tab1 = array(2,4,5,6,9,4,6);
	$tab2 = array(6,4,9,6,7);
	
	Visualizar(Comparar($tab1,$tab2));

    }
?>