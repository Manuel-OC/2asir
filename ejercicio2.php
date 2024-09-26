<?php

	$a = $_POST['numero1'];;
	$b = $_POST['numero2'];;
	Proceso($a,$b);

	function Proceso ($a,$b){
		$mayor;
		$menor;
		if ($a > $b){
			$mayor = $a;
			$menor = $b;
		}
		else{
			$mayor = $b;
			$menor = $a;
		}
		
		Visualizar($mayor,$menor);
	}

	function Visualizar($mayor, $menor){
		for($i = $menor+1; $i < $mayor; $i++){
			echo $i;
		}
	}
?>
