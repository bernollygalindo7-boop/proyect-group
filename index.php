<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Estudiantil</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
  
    <h1>Registro Estudiantil</h1>
    <form id="registroForm" action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

      <label for="carrera">Carrera:</label>
    <select id="carrera" name="carrera" required>
    <option value="">-- Selecciona tu carrera --</option>
    <option value="ING DE SOFTWARE CON IA">ING DE SOFTWARE CON IA</option>
    <option value="DISEÑO GRAFICO">DISEÑO GRAFICO</option>
    <option value="CIBER SEGURIDAD">CIBER SEGURIDAD</option>
    <option value="DESARROLLO DE SOFTWARE">DESARROLLO DE SOFTWARE</option>
    <option value="SOPORTE DE MANTENIMIENTO">SOPORTE DE MANTENIMIENTO</option>
</select>

        <button type="submit">Registrar</button>
    </form>

    <br>
    <a href="listar.php" target="_blank">Ver lista de estudiantes</a>
</body>
</html>
