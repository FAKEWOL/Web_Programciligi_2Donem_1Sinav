<?php
@include('baglanti.php');
$gelenId = $_GET['id'] ?? 0;
$sorgu = "DELETE FROM kitaplar WHERE kitap_id = $gelenId";
if (@mysqli_query($baglanti, $sorgu)) {
    echo 'Silme İşlemi Başarılı';
    header('Refresh:2;index.php');
} else {
    echo "Silme İşlemi Başarısız: " . mysqli_error($baglanti);
}
mysqli_close($baglanti);
?>