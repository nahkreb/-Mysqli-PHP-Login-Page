<?php
// veritabani.php dosyasını include etme
include 'veritabani.php';

// Form gönderildi mi kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre değişkenlerini al
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    // SQL sorgusu
    $sql = "SELECT * FROM kullanici WHERE kullanici_adi='$kullanici_adi' AND kullanici_sifre='$sifre'";
    $result = $conn->query($sql);

    // Sonuç kontrolü
    if ($result->num_rows > 0) {
        // Kullanıcı girişi başarılı ise kullanıcıyı ana sayfaya yönlendir
        header("Location: index.php");
    } else {
        // Kullanıcı girişi başarısız ise hata mesajı göster
        echo "Hatalı kullanıcı adı veya şifre.";
    }
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
</head>
<body>
    <h2>Giriş Yap</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="kullanici_adi">Kullanıcı Adı:</label><br>
        <input type="text" id="kullanici_adi" name="kullanici_adi" required><br>
        <label for="sifre">Şifre:</label><br>
        <input type="password" id="sifre" name="sifre" required><br><br>
        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>
