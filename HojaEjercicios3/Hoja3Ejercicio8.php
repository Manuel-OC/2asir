<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="text" name="nombre">
        <input type="text" name="apellido1">
        <input type="text" name="apellido2">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function Concatenar(){
            $nom = $_POST['nombre'];
            $ape1 = $_POST['apellido1'];
            $ape2 = $_POST['apellido2'];

            $completo = $nom." ".$ape1." ".$ape2;

            return $completo;
        }

        function Visualizar($r){
            echo $r;
        }

        Visualizar(Concatenar());
    
    }
?>