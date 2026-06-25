<?php
// 1. Memanggil semua file yang dibutuhkan (Proses penyatuan)
require_once 'MenuItem.php';
require_once 'Makanan.php';
require_once 'Minuman.php';
require_once 'Dessert.php';

// 2. Kita mulai membuat objek (Instansiasi)
$menuAyam = new Makanan(1, "Ayam Bakar", "Main Course", 25000, 3, 400);
$menuEsTeh = new Minuman(2, "Es Teh Manis", "Minuman", 5000, "Medium", "Cincau");

// 3. Menampilkan hasilnya ke layar
echo "<h1>Selamat Datang di Restoran Kami</h1>";
echo $menuAyam->tampilkanDeskripsi() . "<br>";
echo $menuEsTeh->tampilkanDeskripsi() . "<br>";
?>