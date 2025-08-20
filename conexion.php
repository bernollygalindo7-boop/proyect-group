<?php
$host = "localhost";
$user = "root";   // usuario por defecto en XAMPP
$pass = "";       // contraseña vacía normalmente
$db   = "registro";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
