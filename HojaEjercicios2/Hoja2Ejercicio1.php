<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Nombres:
        <input type="text" name="nombre1">
        <br>
        <input type="text" name="nombre2">
        <br>
        <input type="text" name="nombre3">
        <br>
        <input type="text" name="nombre4">
        <br>
        <input type="text" name="nombre5">
        <br>
        <input type="text" name="nombre6">
        <br>
        <input type="text" name="nombre7">
        <br>
        <input type="number" name="sueldo1">
        <br>
        <input type="number" name="sueldo2">
        <br>
        <input type="number" name="sueldo3">
        <br>
        <input type="number" name="sueldo4">
        <br>
        <input type="number" name="sueldo5">
        <br>
        <input type="number" name="sueldo6">
        <br>
        <input type="number" name="sueldo7">
        <br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {
        
        function EmpleadoMayorSueldo(){
            $nombreEmpleado = '';
            $mayorSueldo = -9999999;

            for ($i = 1 ; $i <= 7 ; $i++){
                if ($_POST['sueldo'.$i] > $mayorSueldo){
                    $mayorSueldo = $_POST['sueldo'.$i];
                    $nombreEmpleado = $_POST['nombre'.$i];
                }
            }

            return $nombreEmpleado;
        }

        function Media(){
            $sum = 0;

            for ($i = 1 ; $i <= 7 ; $i++){
                $sum+=$_POST['sueldo'.$i];
            }

            return $sum/7;
        }

        function EmpleadoEncimaMedia(){
            $media = Media();

            for ($i = 1 ; $i <= 7 ; $i++){
                if ($_POST['sueldo'.$i] > $media){
                    echo $_POST['nombre'.$i].", ";
                }
            }
        }

        function Visualizar($result){
            echo $result;
            echo "<br>";
        }

        Visualizar(EmpleadoMayorSueldo());
        EmpleadoEncimaMedia();
    
    }
?>