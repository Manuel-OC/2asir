<?php
$servidor = "localhost"; // o la dirección de tu servidor de base de datos
$usuario = "root"; // tu usuario
$contraseña = ""; // tu contraseña (deja vacío si no hay)
$base_datos = "databaseconnect.php"; // tu base de datos

$enlace = mysqli_connect($servidor, $usuario, $contraseña, $base_datos);

// Verificar la conexión
if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos.<br>";
?>
