<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
    	<input type="text" name="url">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

    	function Visualizar($e){

    		echo $e[0].$e[1];
    		for($i = 2 ; $i < count($e);$i++){
    			echo $e[$i]."<br>";
    		}
    	}

        $enlace = $_POST['url'];

        Visualizar(explode('/',$enlace));

    }
?>