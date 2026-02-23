<?php
/* sil.php */
session_start(); // Güvenlik kontrolü
include 'baglan.php';

// 1. Önce giriş yapılmış mı diye bakıyoruz (Güvenlik)
if (!isset($_SESSION['giris_yapti'])) {
    header("Location: login.php");
    exit;
}

// 2. URL'den silinecek ID gelmiş mi? (sil.php?id=5 gibi)
if (isset($_GET['id'])) {
    
    // Veritabanından silme komutu
    $sil = $db->prepare("DELETE FROM gelen_mesajlar WHERE id = :id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['id']
    ));
}

// 3. İşlem bitince (başarılı olsun veya olmasın) admin paneline geri dön
header("Location: admin.php");
exit;
?>