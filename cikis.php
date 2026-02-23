<?php
ob_start(); // Olası boşluk/header hatalarını engeller
session_start();

// Tüm oturum verilerini temizle
$_SESSION = array();

// Oturumu tamamen yok et
session_destroy();

// Kullanıcıyı giriş sayfasına geri gönder
header("Location: login.php");
exit;
?>