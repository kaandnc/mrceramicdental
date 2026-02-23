<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>MR Ceramic Dental - Diş Laboratuvarı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/gorsel18.jpeg" type="image/jpeg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mrceramic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top custom-navbar" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/gorsel18.jpeg" width="60" height="54" class="rounded me-2" alt="Logo">
            <span class="brand-text text-uppercase">MR Ceramic Dental</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link custom-btn active" href="index.php">Ana Sayfa</a></li>
                <li class="nav-item"><a class="nav-link custom-btn" href="urunlerimiz.html">Ürünlerimiz</a></li>
                <li class="nav-item"><a class="nav-link custom-btn" href="teknolojilerimiz.html">Teknolojiler</a></li>
                <li class="nav-item"><a class="nav-link custom-btn" href="hakkımızda.html">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link custom-btn" href="iletisim.html">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="main-hero" style="background-image: url('images/gorsel4.png'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="fw-bold text-white">Dijital Diş Teknolojileri</h1>
        <p class="lead text-white-50">
            MR Ceramic ile kliniklerinize kusursuz uyum ve estetik dokunuşlar katıyoruz.
        </p>
    </div>
</header>
<br>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-11">
            
            <div id="carouselExampleDark" class="carousel carousel-dark slide rounded-4 overflow-hidden shadow-lg" data-bs-ride="carousel">
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/gorsel20.jpg" class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Lab Çalışması">
                        <div class="carousel-caption d-none d-md-block bg-white bg-opacity-75 rounded-3 p-2">
                            <h5>Hassas Üretim</h5>
                            <p>Son teknoloji cihazlarla hatasız protez üretimi.</p>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/gorsel3.png" class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Estetik Diş">
                        <div class="carousel-caption d-none d-md-block bg-white bg-opacity-75 rounded-3 p-2">
                            <h5>Estetik Çözümler</h5>
                            <p>Doğal görünüme en yakın zirkonyum ve lamine uygulamaları.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="images/gorsel1.png" class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Hızlı Teslimat">
                        <div class="carousel-caption d-none d-md-block bg-white bg-opacity-75 rounded-3 p-2">
                            <h5>Zamanında Teslimat</h5>
                            <p>Klinik akışınızı aksatmayacak hızlı ve güvenilir süreç.</p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Önceki</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sonraki</span>
                </button>

            </div>

        </div>
    </div>
</div>

<div class="hizmetler-container">

    <div class="hizmet-kutusu">
        <img src="images/gorsel22.jpeg" alt="Porselen Köprü">
        <div class="hizmet-overlay">
            <h3>Porselen Köprü</h3>
            <p>Model üzerinde hazırlanmış estetik köprü çalışması.</p>
        </div>
    </div>

    <div class="hizmet-kutusu">
        <img src="images/gorsel23.jpeg" alt="Hassas Protez">
        <div class="hizmet-overlay">
            <h3>Hassas Protez</h3>
            <p>İnce detaylara sahip, doğal görünümlü yapı.</p>
        </div>
    </div>

    <div class="hizmet-kutusu">
        <img src="images/gorsel31.jpeg" alt="Estetik Kaplama">
        <div class="hizmet-overlay">
            <h3>Estetik Kaplama</h3>
            <p>Doğal diş minesini taklit eden kaplamalar.</p>
        </div>
    </div>

</div>



<section class="hero-area">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h1>MR Ceramic Diş Protez Laboratuvarı</h1>
                <p class="lead">
                    CAD/CAM sistemleriyle dijital iş akışı, zirkonyum ve implant üstü protezlerde
                    yüksek hassasiyet sunar.
                </p>
            </div>
            <div class="col-lg-5 hero-image-stack">
                <img src="images/gorsel9.jpeg" alt="Laboratuvar" class="img-fluid">
            </div>

            
        </div>
    </div>
</section>

<div class="istatistik-bolumu">
    <div class="sayac-kutu">
        <span class="sayi">12+</span>
        <span class="etiket">Yıllık Tecrübe</span>
    </div>

    <div class="sayac-kutu">
        <span class="sayi">8.500+</span>
        <span class="etiket">Tamamlanan Protez</span>
    </div>

    <div class="sayac-kutu">
        <span class="sayi">150+</span>
        <span class="etiket">Mutlu Klinik</span>
    </div>

    <div class="sayac-kutu">
        <span class="sayi">%100</span>
        <span class="etiket">Müşteri Memnuniyeti</span>
    </div>
</div>

<input type="checkbox" id="kapat-kontrol">

<footer class="modern-footer">
    
    <div class="footer-wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="container position-relative z-1">
        <div class="row g-4 justify-content-between">
            
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand mb-4">
                    <h2 class="text-white fw-bold text-uppercase h4">MR Ceramic</h2>
                    <span class="text-primary fw-bold small">Dental Laboratory</span>
                </div>
                <p class="text-white-50 small mb-4">
                    Kusursuz uyum ve estetik için dijital diş hekimliği çözümleri sunuyoruz.
                </p>
                <div class="social-links">
                    <a href="https://www.instagram.com/mrceramic_dental?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-btn"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/905533232421" class="social-btn"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="text-white fw-bold mb-3 position-relative d-inline-block footer-title">Kurumsal</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="hakkımızda.html">Hakkımızda</a></li> 
                    <li><a href="iletisim.html">İletişim</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="text-white fw-bold mb-3 position-relative d-inline-block footer-title">Ürünler</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="urunlerimiz.html">Zirkonyum</a></li>
                    <li><a href="urunlerimiz.html">E-Max Lamine</a></li>
                    <li><a href="urunlerimiz.html">İmplant Üstü</a></li>
                    <li><a href="urunlerimiz.html">Hibrit Protez</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="text-white fw-bold mb-3 position-relative d-inline-block footer-title">Teknoloji</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="teknolojilerimiz.html">CAD/CAM</a></li>
                    <li><a href="teknolojilerimiz.html">3D Lazer Sinter</a></li>
                    <li><a href="teknolojilerimiz.html">Dijital Tarama</a></li>
                    <li><a href="teknolojilerimiz.html">Exocad Tasarım</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="contact-card p-3 rounded-4 bg-white text-dark">
                    <h6 class="fw-bold mb-3 text-primary">Bize Ulaşın</h6>
                    
                    <div class="d-flex align-items-start mb-2">
                        <i class="fa-solid fa-location-dot text-primary mt-1 me-2 small"></i>
                        <span class="text-muted small" style="font-size: 13px;">Atatürk Bulvarı no:38/115 Kızılay/Ankara</span>
                    </div>
                    
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa-solid fa-phone text-primary me-2 small"></i>
                        <span class="fw-bold small">+90 0553 323 2421</span>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-envelope text-primary me-2 small"></i>
                        <span class="text-muted small">mrceramicdental@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-5">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-white-50 small mb-0">&copy; 2026 MR Ceramic Dental. Tüm hakları saklıdır.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <a href="#" class="text-white-50 small text-decoration-none me-3">Gizlilik Politikası</a>
                <a href="#" class="text-white-50 small text-decoration-none">Kullanım Şartları</a>
            </div>
        </div>
    </div>
</footer>

<div class="hekim-sticky-form">
    <div class="form-header">
        <div class="baslik-text">
            <i class="fa-solid fa-user-doctor"></i> Hekim Destek Hattı
        </div>
        <label for="kapat-kontrol" class="kapat-btn">&times;</label>
    </div>
    
   <div class="form-body">
    <form id="iletisimFormu" action="islem.php" method="POST">
        
        <input type="hidden" name="form_tipi" value="Ana Sayfa Hızlı Form">
        
        <input type="hidden" name="email" value="-">

        <div class="form-group">
            <input type="text" name="ad_soyad" placeholder="Adınız Soyadınız" required>
        </div>
        
        <div class="form-group">
            <input type="tel" name="telefon" placeholder="Telefon (5XX...)" required>
        </div>
        
        <div class="form-group">
            <textarea name="mesaj" rows="2" placeholder="Talebiniz nedir?"></textarea>
        </div>
        
        <button type="submit" name="form_gonder" class="hizli-gonder-btn">
            Gönder <i class="fa-solid fa-paper-plane"></i>
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
window.addEventListener("scroll", function () {
    const nav = document.getElementById("mainNav");
    nav.classList.toggle("navbar-shrink", window.scrollY > 50);
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Formun gönderilme olayını yakalıyoruz
    document.getElementById('iletisimFormu').addEventListener('submit', function(event) {
        
        event.preventDefault(); // SAYFANIN YENİLENMESİNİ ENGELLER

        // Form verilerini al
        var formData = new FormData(this);

        // Arka planda islem.php'ye gönder
        fetch('islem.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // JSON cevabını çözümle
        .then(data => {
            if (data.durum === 'success') {
                // Başarılı olursa yeşil kutu çıkar
                Swal.fire({
                    title: 'Teşekkürler!',
                    text: data.mesaj,
                    icon: 'success',
                    confirmButtonText: 'Tamam',
                    confirmButtonColor: '#1a4d75'
                });
                // Formu temizle
                document.getElementById('iletisimFormu').reset();
            } else {
                // Hata varsa kırmızı kutu çıkar
                Swal.fire({
                    title: 'Hata!',
                    text: data.mesaj,
                    icon: 'error',
                    confirmButtonText: 'Tekrar Dene'
                });
            }
        })
        .catch(error => {
            console.error('Hata:', error);
            Swal.fire({
                title: 'Bir Hata Oluştu',
                text: 'Sunucu ile iletişim kurulamadı.',
                icon: 'warning'
            });
        });
    });
</script>

</body>
</html>