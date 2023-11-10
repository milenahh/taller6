<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
</head>
<body>
<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "0103", "mi_proyecto");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Construye la consulta SQL
$sql = "SELECT * FROM usuarios";

// Ejecuta la consulta
$resultado = $conexion->query($sql);

// Verifica si se obtuvieron resultados
if ($resultado->num_rows > 0) {
    echo "<h2>Resultados:</h2>";
    echo "<table id='usuariosTable' class='display'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>
        </thead>
        <tbody>";

    // Muestra los resultados en una tabla
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['nombre'] . "</td>
            <td>" . $row['apellido'] . "</td>
            <td>" . $row['cédula'] . "</td>
        </tr>";
    }

    echo "</tbody></table>";

    // Inicializa DataTables en la tabla
    echo "<script>
        $(document).ready( function () {
            $('#usuariosTable').DataTable();
        });
    </script>";
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión
$conexion->close();
?>
</body>
</html>