<?php
/* admin.php - SİLME ÖZELLİKLİ TAM HALİ */
session_start();

if (!isset($_SESSION['giris_yapti'])) {
    header("Location: login.php");
    exit;
}

include 'baglan.php';

$sorgu = $db->prepare("SELECT * FROM gelen_mesajlar ORDER BY id DESC");
$sorgu->execute();
$mesajlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetim Paneli - MR Ceramic Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { margin-top: 50px; }
        .card { box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Gelen Mesajlar ve Başvurular</h4>
            <div>
                <span class="badge bg-light text-dark me-2"><?php echo $sorgu->rowCount(); ?> Mesaj</span>
                <a href="cikis.php" class="btn btn-danger btn-sm">Çıkış Yap</a>
            </div>
        </div>
        
        <div class="card-body">
            <table class="table table-hover table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#ID</th>
                        <th>Form Tipi</th>
                        <th>Ad Soyad</th>
                        <th>Email & Telefon</th>
                        <th style="width: 35%;">Mesaj</th>
                        <th>Tarih</th>
                        <th>İşlem</th> </tr>
                </thead>
                <tbody>
                    <?php foreach($mesajlar as $mesaj) { ?>
                        <tr>
                            <td><?php echo $mesaj['id']; ?></td>
                            <td><span class="badge bg-info text-dark"><?php echo $mesaj['form_tipi']; ?></span></td>
                            <td><b><?php echo $mesaj['ad_soyad']; ?></b></td>
                            <td>
                                <?php echo $mesaj['email']; ?><br>
                                <small class="text-muted"><?php echo $mesaj['telefon']; ?></small>
                            </td>
                            <td><?php echo $mesaj['mesaj']; ?></td>
                            <td><?php echo $mesaj['tarih']; ?></td>
                            
                            <td>
                                <a href="sil.php?id=<?php echo $mesaj['id']; ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bu kaydı silmek istediğinize emin misiniz?')">
                                   Sil
                                </a>
                            </td>
                            
                        </tr>
                    <?php } ?>
                    
                    <?php if($sorgu->rowCount() == 0) { ?>
                        <tr>
                            <td colspan="7" class="text-center p-4">Henüz hiç mesaj yok.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>