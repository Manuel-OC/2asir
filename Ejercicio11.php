<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<!--Colaboración especial de Juan Diego y Ale-->
    <form method="post" action="" >
    	<input type="text" name="email">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

<?php } else {
        
        $valido = 'false';
        $correo = $_POST['email'];
       
       	$correo2 = explode('@',$correo);
       	
       	if(count($correo2) == 2){
       		$correo3 = explode('.',$correo2[count($correo2)-1]);
       		
       		if($correo3[count($correo3)-1] == 'es' || $correo3[count($correo3)-1] == 'com' || $correo3[count($correo3)-1] == 'net'){
       			$valido = 'true';
       		}
       	}
       	
       	if($valido == 'true'){echo "El correo es válido";}
       	else{echo "El correo no es válido";}
    
    }
?>
