<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// CREACION DE LA CONEXION
$conn = new mysqli($host, $username, $password, $dbname);

// VERIFICACION DE LA CONEXION
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
echo "Conexion exitosa";
?>