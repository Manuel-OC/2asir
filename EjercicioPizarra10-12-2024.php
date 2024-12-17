<?php
	function MediaEmpleado($e){
		$m=array_sum($e['ventas'])/count($e['ventas']);
		echo "La media de ventas de el empleado ".$e['nombre']." es ".$m."\n";
	}
	
	function Medias($e){
 
		foreach($e as $key => $value){
			MediaEmpleado($value);
		}
 
	}
	
	$emp= array(
		'Empleado1' => array(
			"nombre"=>"Pepe Lopez", 
			"sueldo"=>3000, 
			"ciudad"=>"Chiclana", 
			"ventas"=>array(500,200,100)
			),
		'Empleado2' => array(
			"nombre"=>"Paco Martinez", 
			"sueldo"=>1500, 
			"ciudad"=>"Cádiz", 
			"ventas"=>array(300,100,50)
			),
		'Empleado3' => array(
			"nombre"=>"Ana Perez", 
			"sueldo"=>4000, 
			"ciudad"=>"San Fernando", 
			"ventas"=>array(600,250,200)
			)
	);
	
	Medias($emp);
?>