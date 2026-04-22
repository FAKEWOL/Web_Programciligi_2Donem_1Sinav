<?php
// baglanti.php Sayfası İle Bağlantı Kurar
@include('baglanti.php');
// Form Sayfasındaki Verileri Çeker
$gelen_kitap_adi = $_POST['kitap_adi'] ?? '';
$gelen_kitap_turu = $_POST['kitap_tur'] ?? '';
$gelen_kitap_yazar = $_POST['kitap_yazar'] ?? '';
$gelen_sayfa_sayisi = $_POST['kitap_sayfa_sayisi'] ?? 0;

// Çekilen Veriler Veri Tabanına Eklenir
$sorgu = "INSERT INTO kitaplar(kitap_adi, kitap_tur, kitap_yazar, kitap_sayfa) VALUES('$gelen_kitap_adi', '$gelen_kitap_turu', '$gelen_kitap_yazar', $gelen_sayfa_sayisi)";
if (@mysqli_query($baglanti, $sorgu)) {
    echo 'Kayıt Başarılı';
} else {
    echo "Hata: " . mysqli_error($baglanti);
}
header('Location:index.php');
?>