<?php
// Crear conexión
$conn = new mysqli("localhost", "root", "L4fl4M3", "prueba");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$id = $_POST['id'];

// SQL para actualizar un registro
$sql = "UPDATE users SET nombre='$nombre', email='$email' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error actualizando el registro: " . $conn->error;
}

$conn->close();
?>
