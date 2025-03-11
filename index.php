<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // baglanti.php Sayfası İle Bağlantı Kurar
    @include("baglanti.php");  

    // Veri Tabanındaki Verileri Çağırır Ve Yazdırır
    $sorgu="select * from kitaplar";
    if($veri=@mysqli_query($baglanti,$sorgu)){
        while($kayit=@mysqli_fetch_array($veri)){
            echo 
            $kayit["kitap_id"]."-".
            $kayit["kitap_adi"]."-".
            $kayit["kitap_tur"]."-".
            $kayit["kitap_yazar"]."-".
            $kayit["kitap_sayfa"]."<a href='#'>Sil</a>  <a href='#'>Güncelle</a>".
            "<br>";
        }
    }
    ?>
    <hr>
    <a href="ekle.php">Yeni Kayıt Ekle</a>
</body>
</html>
