<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Nombre:
        <input type="text" name="nombre">
        Sexo:
        <input type="text" name="sexo">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function CambiarNombre(){

            if($_POST['sexo'] == 'M'){
                $nombre = "Sra. ".$_POST['nombre'];
            } elseif ($_POST['sexo'] == 'H'){
                $nombre = "Sr. ".$_POST['nombre'];
            } else{
                $nombre = "ERROR";
            }

            return $nombre;
        }
    
        function Visualizar($nom){
            echo $nom;
        }

        Visualizar(CambiarNombre());
    }
?>