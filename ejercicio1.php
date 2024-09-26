<?php

	$a = 2;
	$b = 3;
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
