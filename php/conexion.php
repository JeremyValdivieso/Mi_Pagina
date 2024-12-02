<?php
$host = "localhost";       // Usamos localhost
$port = "3307";            // Puerto configurado en XAMPP
$user = "root";            // Usuario por defecto en MySQL
$password = "";            // Contraseña vacía si no está configurada
$db = "fotografia_awarspace";  // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $db, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
