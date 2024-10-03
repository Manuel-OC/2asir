<?php

	function Media (){
		$acum = 0;
		for ($i = 1 ; $i <= 7 ; $i++){
			$acum += $_POST['numero'.$i];
		}
		return $acum/7;
	}
	
	function Visualizar($media){
		for ($i = 1 ; $i <= 7 ; $i++){
			if($_POST['numero'.$i] > $media){
				echo $_POST['numero'.$i];
			}
		}
	}

	Visualizar(Media());
?>
