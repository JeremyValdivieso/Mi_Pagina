<?php
include('conexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../index.html');
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
