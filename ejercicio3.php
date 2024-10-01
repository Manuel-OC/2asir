<?php

	$a = $_POST['numero1'];
	$b = $_POST['numero2'];
	$operacion = $_POST['radio1'];
	ComprobarOperacion($a,$b,$operacion);

	function ComprobarOperacion($a,$b,$op){
		if($op == 'suma'){
			Sumasion($a,$b);
		}
		else if($op == 'resta'){
			Restasion($a,$b);
		}
	}

	function Sumasion($num1,$num2){Visualizar($num1+$num2);}
	function Restasion($num1,$num2){Visualizar($num1-$num2);}

	function Visualizar($result){
		echo $result;
	}
?>
