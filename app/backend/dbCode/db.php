<?php
// Configuración de conexión
$host = 'localhost';       // Servidor de la base de datos
$user = 'root';            // Usuario (cambia si usas otro)
$password = '';            // Contraseña (vacía por defecto en Laragon o XAMPP)
$database = 'batnissan'; // Cambia por el nombre real de tu base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Establecer el charset a utf8mb4 para soportar tildes, emojis, etc.
$conn->set_charset("utf8mb4");
?>
