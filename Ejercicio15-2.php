<?php

	session_start();

	function ConfirmarOtraVez($n,$l){
        
        	echo "Sí sí, que eres ".$n." de ".$l;
        
        }
        
        ConfirmarOtraVez($_SESSION['nombresito'],$_SESSION['localidadsita']);

?>
