<?php
/* login.php - Sorunsuz Sürüm */
ob_start();      // Header (yönlendirme) hatalarını engellemek için tamponlama
session_start(); // Oturumu başlat

// KURAL 1: Eğer kullanıcı ZATEN giriş yapmışsa, tekrar giriş sorma, direkt panele at.
// (Bu kod "sayfa sizi çok fazla yönlendirdi" hatasını ve mantık hatalarını çözer)
if (isset($_SESSION['giris_yapti']) && $_SESSION['giris_yapti'] === true) {
    header("Location: admin.php");
    exit;
}

// KURAL 2: Form gönderilmişse bilgileri kontrol et
if (isset($_POST['giris_yap'])) {
    
    $kullanici_adi = $_POST['kullanici'];
    $sifre = $_POST['sifre'];

    // --- GÜVENLİK AYARI ---
    // Buraya tahmin edilmesi zor bilgiler yazdım. 
    // İstersen bunları kullan, istersen tırnak içindekileri değiştir.
    $yonetici_adi   = "...."; 
    $yonetici_sifre = "...."; 

    if ($kullanici_adi == $yonetici_adi && $sifre == $yonetici_sifre) {
        
        // Şifre doğru, giriş kartını ver
        $_SESSION['giris_yapti'] = true;
        
        // Admin sayfasına gönder
        header("Location: admin.php");
        exit;
    } else {
        $hata = "Hatalı bilgi girdiniz!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap - MR Ceramic Dental</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e9ecef; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .card { width: 100%; max-width: 400px; padding: 20px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-radius: 15px; }
        .btn-primary { background-color: #1a4d75; border: none; }
        .btn-primary:hover { background-color: #153d5d; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 d-flex justify-content-center">
            
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h3 class="text-primary fw-bold">Yönetici Girişi</h3>
                        <p class="text-muted small">Lütfen bilgilerinizi doğrulayın</p>
                    </div>
                    
                    <?php if(isset($hata)) { ?>
                        <div class="alert alert-danger text-center py-2"><?php echo $hata; ?></div>
                    <?php } ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold small">Kullanıcı Adı</label>
                            <input type="text" name="kullanici" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold small">Şifre</label>
                            <input type="password" name="sifre" class="form-control form-control-lg" required>
                        </div>
                        <button type="submit" name="giris_yap" class="btn btn-primary w-100 py-3 fw-bold">GÜVENLİ GİRİŞ YAP</button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <a href="index.html" class="text-decoration-none text-muted small">
                            <i class="fa-solid fa-arrow-left"></i> Siteye Geri Dön
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>