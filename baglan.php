<?php
/* baglan.php - HOSTING AYARLARI */
try {
    $host = 'localhost'; // Burası genelde 'localhost' olarak kalır, değiştirme.
    $dbname = 'mrcerami_dental';   // Hostingde oluşturduğun veritabanı adı
    $username = 'mrcerami_yonetici'; // Hostingde oluşturduğun kullanıcı adı
    $password = 'Fjhdes18!'; // <-- BURAYI SEN DOLDUR
    $charset = 'utf8mb4';

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Güvenlik için hatayı ekrana basarken dikkatli olalım
    echo 'Veritabanı bağlantı hatası oluştu. Lütfen ayarları kontrol edin.';
    // echo $e->getMessage(); // Sitede hata olursa detayları görmek için bu satırın başındaki // işaretini kaldırabilirsin.
    exit;
}
?>