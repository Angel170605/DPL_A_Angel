<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "L4fl4M3", "prueba");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// SQL para seleccionar registros
$sql = "SELECT id, nombre, email FROM users";
$result = $conn->query($sql);

// Mostrar número de filas
echo "Número de filas: " . $result->num_rows . "<br>";

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
