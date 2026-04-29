<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = !empty($_POST['telefono']) ? $_POST['telefono'] : null;
    $mensaje = $_POST['mensaje'];

    $stmt = $conn->prepare("INSERT INTO clientes (cli_nombre, cli_correo, cli_telefono, cli_mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $correo, $telefono, $mensaje);

    if ($stmt->execute()) {
        // Redirigimos a la página de gracias
        header("Location: gracias.php");
        exit(); 
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>