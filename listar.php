<?php
include("conexion.php");

// Obtener todos los estudiantes
$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista de Estudiantes</h2>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Carrera</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><?php echo $row["edad"]; ?></td>
                    <td><?php echo $row["carrera"]; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay estudiantes registrados.</td></tr>
        <?php endif; ?>
    </table>

    <br>
    <a href="index.php">⬅ Volver al registro</a>
</body>
</html>
<?php $conn->close(); ?>
