<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        <input type="number" name="n1">
        <input type="number" name="n2">
        <input type="number" name="n3">
        <input type="number" name="n4">
        <input type="number" name="n5">
        <input type="number" name="n6">
        <input type="number" name="n7">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function EstanOrdenados(){
            $result = true;

            for($i = 1 ; $i < 7 ; $i++){
                $menor = $_POST['n'.$i];
                $mayor = $_POST['n'.$i+1];

                if($menor > $mayor){
                    $result = false;
                    break;
                }      
            }

            return $result;

        }

        function Visualizar($r){
            if($r){echo "Esta ordenado";}
            else{echo "No esta ordenado";}
        }

        Visualizar(EstanOrdenados());
    
    }
?>