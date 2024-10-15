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
        
        $matriz = array(
        array("marca"=>"Audi","modelo"=>"A7","puertas"=>5,"precio"=>70000),
        array("marca"=>"Toyota","modelo"=>"Corola","puertas"=>3,"precio"=>25000),
        array("marca"=>"Seat","modelo"=>"Ibiza","puertas"=>5,"precio"=>30000),
        array("marca"=>"Citroen","modelo"=>"C3","puertas"=>7,"precio"=>10000)
        );
        
	foreach ($matriz as $coche){
		if($coche["precio"]>=30000){
			echo $coche["marca"]." ".$coche["modelo"]."<br>";
		}
	}
    
    }
?>
