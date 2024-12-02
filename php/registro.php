<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios (usuario, email, password) VALUES ('$usuario', '$email', '$password')";

    if ($conn->query($query) === TRUE) {
        header('Location: ../login.html');
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}
?>
