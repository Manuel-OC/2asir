<?php

	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];
	$edad = $_GET['edad'];
	$peso = $_GET['peso'];
	$genero = $_GET['genero'];
	$estadocivil = $_GET['estadoCivil'];
	$cine = $_GET['cine'];
	$literatura = $_GET['literatura'];
	$tebeos = $_GET['tebeos'];
	$deporte = $_GET['deporte'];
	$musica = $_GET['musica'];
	$television = $_GET['television'];

	if($nombre != ""){echo "Nombre: ".$nombre ;}
	else{echo "No ha dicho su nombre";}
	
	echo "<br>";
	
	if($apellidos != ""){echo "Apellidos: ".$apellidos ;}
	else{echo "No ha dicho sus apellidos";}
	
	echo "<br>";
	
	if($edad == "..."){echo "No ha dicho su edad" ;}
	else{
		switch ($edad) {
			case 1:
				echo "Es menor de 20 años";
				break;
			case 2:
				echo "Tiene entre 20 y 39 años";
				break;
			case 3:
				echo "Tiene entre 40 y 59 años";
				break;
			case 4:
				echo "Tiene 60 años o más";
				break;
		}
	}
	
	echo "<br>";
	
	if($peso != ""){echo "Peso: ".$peso ;}
	else{echo "No ha dicho su peso";}
	
	echo "<br>";
	
	if($genero != ""){echo "Género: ".$genero ;}
	else{echo "No ha dicho su género";}
	
	echo "<br>";
	
	if($estadocivil != ""){echo "Estado civil: ".$estadocivil ;}
	else{echo "No ha dicho estado civil";}
	
	echo "<br>";
	
	if($cine != ""){echo "Le gusta el cine";}
	else{echo "No le gusta el cine";}
	
	echo "<br>";
	
	if($literatura != ""){echo "Le gusta la literatura";}
	else{echo "No le gusta la literatura";}
	
	echo "<br>";
	
	if($tebeos != ""){echo "Le gustan los tebeos";}
	else{echo "No le gustan los tebeos";}
	
	echo "<br>";
	
	if($deporte != ""){echo "Le gusta el deporte";}
	else{echo "No le gusta el deporte";}
	
	echo "<br>";
	
	if($musica != ""){echo "Le gusta la musica";}
	else{echo "No le gusta la musica";}
	
	echo "<br>";
	
	if($television != ""){echo "Le gusta la television";}
	else{echo "No le gusta la television";}
	

?>
