<!DOCTYPE html>
<html>
<body>

<?php

class Persona {
	private $nombre;
	
	public function setNombre ($n) {
		$this->nombre=$n;
	}
	
	public function getNombre () {
		return $this->nombre;
	}
}

class Alumno extends Persona {

	private $notas = array(0,0,0);
	
	public function setNotas ($not) {
		for($i = 0; $i < count($not); $i++){
			$this->notas[$i]=$not[$i];
		}
	}
	
	public function calcularMedia() {
		$sum = 0;
		for($i = 0; $i < count($this->notas); $i++){
			$sum+=$this->notas[$i];
		}
		$media=$sum/(count($this->notas));
		return $media;
	}

}

class Profesor extends Persona {

	private $asignatura;
	
	public function setAsignatura ($a) {
		$this->asignatura=$a;
	}
	
	public function getAsignatura () {
		return $this->asignatura;
	}
}

$notas1=array(9,6,8);
$notas2=array(3,5,7);

$lolo=new Alumno();
$lolo->setNombre("Lolo");
$lolo->setNotas($notas1);
$m1=$lolo->calcularMedia();

$juandiego=new Alumno();
$juandiego->setNombre("Juan Diego");
$juandiego->setNotas($notas2);
$m2=$juandiego->calcularMedia();

echo "La nota de ".$juandiego->getNombre()." es: ".$m2."<br>";
echo "La nota de ".$lolo->getNombre()." es: ".$m1."<br>";

$alberto=new Profesor();
$alberto->setNombre("Alberto");
$alberto->setAsignatura("IAW");

$javi=new Profesor();
$javi->setNombre("Javi");
$javi->setAsignatura("SAD");

echo "La asignatura ".$javi->getAsignatura()." es impartida por el profesor ".$javi->getNombre()."<br>";
echo "La asignatura ".$alberto->getAsignatura()." es impartida por el profesor ".$alberto->getNombre()."<br>";

?>

</body>
</html>
