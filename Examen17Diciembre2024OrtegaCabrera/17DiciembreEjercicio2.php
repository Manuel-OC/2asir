<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
    	<input type="text" name="frase">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

    	function EstaContenida($f,$c){

    		$cont=0;

    		for($i = 0; $i < strlen($f); $i++){
    			if($f[$i]==$c[$cont]){
    				$cont++;
    			}
    		}

    		if($cont == 7){
    			echo "miclave está contenida en la frase";
    		}else{
    			echo "miclave NO está contenida en la frase";
    		}
    	}

    	$f = $_POST['frase'];
    	$c=['m','i','c','l','a','v','e'];

    	EstaContenida($f,$c);

    }
?>