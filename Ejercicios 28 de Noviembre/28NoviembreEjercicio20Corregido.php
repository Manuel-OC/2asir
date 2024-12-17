<?php 
 
    	function Rotacion($v,$inicial,$final){
 
		$burbuja = $v[$inicial];
		for($i = $inicial; $i < $final; $i++){
			$v[$i] = $v[$i+1];
		}
		$v[$final] = $burbuja;
	 
		return $v;
 
	}
 
	function Visualizar($r){
		for($i = 0; $i < count($r); $i++){
			echo $i." -> ".$r[$i]."\n";
		}
		echo "\n";
        }
 
        $vector = array(6,3,7,2,5,3,4,5,9,1);
        $inicial = 5;
        $final = 9;
 
        Visualizar($vector);
        Visualizar(Rotacion($vector,$inicial,$final));
 
?>
