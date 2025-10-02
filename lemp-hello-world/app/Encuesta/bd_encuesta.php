<?php
// bd_encuesta.php
$host = "lemp-mysql"; 
$user = "root"; 
$pass = "rootpass";
$dbname = "encuesta_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
