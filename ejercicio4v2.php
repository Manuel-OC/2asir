<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Ingrese primer valor:
        <input type="number" name="valor1">
        <br>
        <input type="submit" name="calcular">
    </form>
    </body>
    </html>

    <?php } else {
if ($_POST["valor1"]%2 == 0) {
    echo "Par";
}

else {
    echo "Impar";
}
    }
?>
