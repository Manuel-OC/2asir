<?php

	function Operaciones(){
	
		if($_POST['check1']){Visualizar(Suma());}
		if($_POST['check2']){Visualizar(Resta());}
	
	}
	
	function Suma(){
		$sum = 0;
		for($i = 0 ; $i <= 5 ; $i++){
			$sum += $_POST['numero'.$i];
		}
		return $sum;
	}
	
	function Resta(){
		$rest = 0;
		for($i = 0 ; $i <= 5 ; $i++){
			$rest -= $_POST['numero'.$i];
		}
		return $rest;
	}
	
	function Visualizar($result){echo $result;}
	
	Operaciones();
?>
