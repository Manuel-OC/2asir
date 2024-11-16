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

        $hora = date("H:i:s");
        $fecha = date("d-m-Y");

        echo "HORA ACTUAL: ".$hora."<br> DÍA ACTUAL: ".$fecha;

    }
?>