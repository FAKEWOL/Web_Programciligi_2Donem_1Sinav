<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // baglanti.php Sayfası İle Bağlantı Kurar
        @include("baglanti.php");
        // Form Sayfasındaki Verileri Çeker
        $gelen_kitap_adi = $_POST["kitap_adi"];
        $gelen_kitap_turu = $_POST["kitap_tur"];
        $gelen_kitap_yazar = $_POST["kitap_yazar"];
        $gelen_sayfa_sayisi = $_POST["kitap_sayfa_sayisi"];

        // Çekilen Veriler Veri Tabanına Eklenir
        $sorgu="insert into kitaplar(kitap_adi,kitap_tur,kitap_yazar,kitap_sayfa)
        values('$gelen_kitap_adi','$gelen_kitap_tur','$gelen_kitap_yazar','$gelen_sayfa_sayisi')";
        if(@mysqli_query($baglanti,$sorgu)){
            echo("Kayıt Başarılı");
        }
        else{
            echo "Hata:".mysqli_error($baglanti);
        }
        header("Location:index.php");
    ?>
</body>
</html>
