<?php
// Veri Tabanı İle Bağlantı
$baglanti = @mysqli_connect('localhost', 'root', '', 'DersDB');
if ($baglanti === false) {
    die('Bağlantı Hatası: ' . mysqli_connect_error());
}
// Sayfanın Türkçe Karakterleri Desteklemesini Sağlar
mysqli_set_charset($baglanti, 'utf8mb4');
?>