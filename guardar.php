<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $carrera = $_POST["carrera"];

    $sql = "INSERT INTO estudiantes (nombre, edad, carrera) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nombre, $edad, $carrera);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
