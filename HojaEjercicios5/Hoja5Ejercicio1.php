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

    	function FuncionA($e){
    		
    		for ($i = 0;  $i < count($e); $i++){
    			if($e[$i]['sueldo'] > 1500 && $e[$i]['sexo'] == 'M'){
    				echo $e[$i]['nombre']." - ".$e[$i]['sueldo']." <br>";
    			}
    		}

    		echo "<br>";
    	}

    	function FuncionB($e){
    		
    		$sum = 0;
    		$cont = 0;

    		for ($i = 0;  $i < count($e); $i++){
    			if($e[$i]['sexo'] == 'H'){
    				$sum+=$e[$i]['sueldo'];
    				$cont++;
    			}
    		}

    		$media = $sum/$cont;
    		echo $media."<br><br>";
    	}

    	function FuncionC($e){

    		$indice = -1;
    		$maxSueldo = -1;

    		for ($i = 0;  $i < count($e); $i++){
    			if($e[$i]['sueldo'] > $maxSueldo){
    				$indice = $i;
    				$maxSueldo = $e[$i]['sueldo'];
    			}
    		}
    		
    		echo $e[$indice]['nombre']." - ".$e[$indice]['sexo']."<br>";
    	}

		$empleados = array(
			array('nombre' => 'Antonio',
				'apellido' => 'Gonzalez',
				'sueldo' => 1500,
				'sexo' => 'H'),
			array('nombre' => 'Maria',
				'apellido' => 'Torres',
				'sueldo' => 2500,
				'sexo' => 'M'),
			array('nombre' => 'Javier',
				'apellido' => 'Vaquero',
				'sueldo' => 2100,
				'sexo' => 'H'),
			array('nombre' => 'Laura',
				'apellido' => 'Moreno',
				'sueldo' => 1900,
				'sexo' => 'M'),
			array('nombre' => 'Luis',
				'apellido' => 'Fernadez',
				'sueldo' => 1700,
				'sexo' => 'H')
		);
		
		FuncionA($empleados);
		FuncionB($empleados);
		FuncionC($empleados);
	}
?>
