<?php
// Veritabanı bilgileri
$servername = "localhost"; // Veritabanı sunucusu
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$database = "ornek"; // Veritabanı adı

// Veritabanı bağlantısını oluşturma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}
?>