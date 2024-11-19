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
        
        class Persona{
        
        	private $nombre;
        	private $lugarnacimiento;
        	private $colores = array('','','');
        	
        	public function __construct($n,$l,$c){
     		
     			$this->nombre = $n;
     			$this->lugarnacimiento = $l;
     			for($i = 0; $i < count($c); $i++){
     				$this->colores[$i] = $c[$i];
     			}
     		
        	}
        	
        	public function getNombre(){return $this->nombre;}
        	public function getLugarNacimiento(){return $this->lugarnacimiento;}
        	public function getColores(){
        		
        		return implode($this->colores);
        	}
        
        }
        
        $objeto1 = new Persona("Lolo","Cádiz",array("Verde","Morado","Azul"));
        
        echo "Hola soy ".$objeto1->getNombre()." soy de ".$objeto1->getLugarNacimiento()." y mis colores favoritos son ".$objeto1->getColores();
    
    }
?>
