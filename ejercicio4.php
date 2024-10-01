<?php

	$a = $_POST['numero1'];;
	Comprobar($a);

	function Comprobar($a){
		if($a%2 == 0){
			echo "Par";
		}
		else{
			echo "Impar";
		}
	}
?>
