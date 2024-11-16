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

        setlocale(LC_ALL,"spanish");

        echo strftime("Son las %H:%M:%S del %A %d de %B de %Y",mktime(date("H"),date("i"),date("s"),date("n"),date("j"),date("Y")));

    }
?>