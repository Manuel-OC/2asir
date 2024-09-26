<?php

	$a = $_POST['numero1'];
	$b = $_POST['numero2'];
	Visualizar(Proceso($a,$b));

	function Proceso ($a,$b){
		if($a != $b){
			return $a*$b;
		}else{
			return $a+$b;
		}
	}

	function Visualizar($res){
		echo $res;
	}
?>
