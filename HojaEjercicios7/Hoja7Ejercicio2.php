<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="text" name="frase1">
        <input type="text" name="frase2">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function Visualizar($r){
            if($r > 0){
                echo "La primera frase es más larga que la segunda";
            }else if($r < 0){
                echo "La segunda frase es más larga que la primera";
            }else{
                echo "Ambas frases son igual de largas";
            }
        }

        $f1 = $_POST['frase1'];
        $f2 = $_POST['frase2'];

        Visualizar(strcasecmp($f1,$f2));
    }
?>