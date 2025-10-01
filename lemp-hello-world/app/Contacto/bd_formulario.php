<?php
// --- Conexión a la base de datos ---
$host = "lemp-mysql"; 
$user = "root"; 
$pass = "rootpass";
$dbname = "bd_contactos";

$conn = new mysqli($host, $user, $pass, $dbname); // Conexión al servidor y selección de la base de datos

if ($conn->connect_error) { // Verificar conexión
    die("Conexión fallida: " . $conn->connect_error); // Terminar si hay error
}

// Recibir datos del formulario ---
$numero_control = $conn->real_escape_string($_POST['control']); // Evitar inyección SQL
$nombre         = $conn->real_escape_string($_POST['nombre']); 
$apellidos      = $conn->real_escape_string($_POST['apellido']); //real_escape_string para evitar inyeccion sql
$email          = $conn->real_escape_string($_POST['email']); // $POST es un array asociativo que contiene los datos enviados por el formulario
$numero_tel     = $conn->real_escape_string($_POST['telefono']);
$asunto         = $conn->real_escape_string($_POST['mensaje']);

$sql = "INSERT INTO alumnos_contacto (Numero_Control, Nombre, Apellidos, Email, Numero_Tel, Asunto)
        VALUES ('$numero_control','$nombre','$apellidos','$email','$numero_tel','$asunto')"; // Consulta SQL para insertar datos

if ($conn->query($sql) === TRUE) {
    echo "<h2>Registro guardado correctamente</h2>";
    echo "<a href='contacto.php'>Volver al formulario</a>";
} else {
    echo "Error al guardar: " . $conn->error;
}

$conn->close();
?>
