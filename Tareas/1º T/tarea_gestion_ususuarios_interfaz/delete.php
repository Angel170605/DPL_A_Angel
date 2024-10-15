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

// SQL para borrar un registro
$sql = "DELETE FROM users WHERE id='$id' OR nombre='$nombre' OR email='$email'";

if ($conn->query($sql) === TRUE) {
    echo "Registro borrado exitosamente";
} else {
    echo "Error borrando el registro: " . $conn->error;
}

$conn->close();
?>
