<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

// Crear una conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
//echo "Conexión exitosa";
?>
