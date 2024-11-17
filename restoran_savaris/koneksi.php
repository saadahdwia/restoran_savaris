<?php
$servername = "localhost"; // Ganti sesuai dengan konfigurasi database Anda
$username = "root"; // Ganti sesuai dengan konfigurasi database Anda
$password = ""; // Ganti sesuai dengan konfigurasi database Anda
$dbname = "restoran_savaris";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
