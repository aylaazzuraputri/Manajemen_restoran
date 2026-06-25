<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";       // Silakan ganti sesuai username database Anda
$password = "";       // Silakan ganti sesuai password database Anda
$dbname = "manajemen_restoran";

// Membuat Koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Memeriksa Koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil ke database: " . $dbname;
}
?>