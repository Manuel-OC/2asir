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

        echo "Hace ".mktime(date("H"),date("i"),date("s"),date("n"),date("j"),date("Y"))." segundos desde que acabaron los años 60's";

    }
?>