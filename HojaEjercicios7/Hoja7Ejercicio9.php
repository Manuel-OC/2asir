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

        $hoy = getdate();

        echo "Hoy estamos a ".$hoy['mday']."/".$hoy['month']."/".$hoy['year'];

    }
?>