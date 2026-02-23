<?php
// Sayfanın bir HTML değil, JSON verisi olduğunu belirtiyoruz
header('Content-Type: application/json; charset=utf-8');

// Hataları ekrana basmasını engelliyoruz (JSON yapısını bozmamak için)
error_reporting(0); 
ini_set('display_errors', 0);

$response = []; // Cevabı burada biriktireceğiz

// 1. Veritabanı dosyasını dahil et
if (file_exists('baglan.php')) {
    include 'baglan.php';
} else {
    echo json_encode(['durum' => 'error', 'mesaj' => 'Veritabanı bağlantı dosyası (baglan.php) bulunamadı!']);
    exit;
}

// 2. İstek kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verilerin boş gelip gelmediğini kontrol et
    if (isset($_POST['ad_soyad']) && trim($_POST['ad_soyad']) != "") {

        // Değişkenleri alalım (Güvenlik için htmlspecialchars eklendi)
        $ad_soyad = htmlspecialchars(trim($_POST['ad_soyad']));
        $email    = htmlspecialchars(trim($_POST['email']));
        $telefon  = htmlspecialchars(trim($_POST['telefon']));
        $mesaj    = htmlspecialchars(trim($_POST['mesaj']));
        $form_tipi = isset($_POST['form_tipi']) ? $_POST['form_tipi'] : "Genel Form";

        // 3. Veritabanına Kayıt İşlemi
        if (isset($db)) {
            
            try {
                $kaydet = $db->prepare("INSERT INTO gelen_mesajlar SET
                    ad_soyad = :ad,
                    email    = :mail,
                    telefon  = :tel,
                    mesaj    = :msg,
                    form_tipi = :tip
                ");

                $insert = $kaydet->execute(array(
                    'ad'   => $ad_soyad,
                    'mail' => $email,
                    'tel'  => $telefon,
                    'msg'  => $mesaj,
                    'tip'  => $form_tipi
                ));

                if ($insert) {
                    // --- BAŞARILI ---
                    $response['durum'] = 'success';
                    $response['mesaj'] = 'Talebiniz başarıyla alındı. En kısa sürede dönüş yapacağız.';
                } else {
                    // --- SQL HATASI ---
                    $response['durum'] = 'error';
                    $response['mesaj'] = 'Kayıt sırasında bir hata oluştu.';
                }

            } catch (PDOException $e) {
                // --- VERİTABANI HATASI ---
                $response['durum'] = 'error';
                $response['mesaj'] = 'Veritabanı hatası: ' . $e->getMessage();
            }

        } else {
            $response['durum'] = 'error';
            $response['mesaj'] = 'Veritabanı bağlantısı ($db) kurulamadı.';
        }

    } else {
        $response['durum'] = 'error';
        $response['mesaj'] = 'Lütfen Ad Soyad alanını boş bırakmayın.';
    }

} else {
    $response['durum'] = 'error';
    $response['mesaj'] = 'Geçersiz istek türü.';
}

// Sonucu JSON olarak yazdır
echo json_encode($response);
exit;
?>