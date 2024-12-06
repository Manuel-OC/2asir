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

	function FuncionA ($f) {
	
		$contadores = array(
				'a' => 0,
				'e' => 0,
				'i' => 0,
				'o' => 0,
				'u' => 0
		);
		
		for($i = 0; $i < strlen($f); $i++){
			if($f[$i]=='a' || $f[$i]=='A'){$contadores['a']++;}
			if($f[$i]=='e' || $f[$i]=='E'){$contadores['e']++;}
			if($f[$i]=='i' || $f[$i]=='I'){$contadores['i']++;}
			if($f[$i]=='o' || $f[$i]=='O'){$contadores['o']++;}
			if($f[$i]=='u' || $f[$i]=='U'){$contadores['u']++;}
		}
		
		return $contadores;
		
	}
	
	function FuncionB ($f) {
	
		$contadores = array();
		
		for($i = 0; $i < strlen($f); $i++){
			if($f[$i]!='a' && $f[$i]!='A' && $f[$i]!='e' && $f[$i]!='E' && $f[$i]!='i' && $f[$i]!='I' && $f[$i]!='o' && $f[$i]!='O' && $f[$i]!='u' && $f[$i]!='U'){
				$contadores["'".$f[$i]."'"]++;
			}
		}
		
		return $contadores;
		
	}
	
	function FuncionC ($f) {
	
		for($i = 0; $i < strlen($f); $i++){
			if($f[$i]=='a' || $f[$i]=='A'){
				$f[$i] = '*';
			}
		}
		
		for($i = 0; $i < strlen($f); $i++){
			echo $f[$i];
		}
		
		echo "<br>";
		
	}
	
	function FuncionD ($f) {
	
		list($anterior,$posterior) = explode("completo",$f);
		
		for($i = 0; $i < strlen($posterior); $i++){
			echo $posterior[$i];
		}
		
	}
	
	function Visualizar ($vector) {
		foreach ($vector as $key => $value){
			echo "La letra ".$key." aparece ".$value." veces <br>";
		}
	}

	$frase = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
	
	Visualizar(FuncionA($frase));
	Visualizar(FuncionB($frase));
	FuncionC($frase);
	FuncionD($frase);

    }
?>