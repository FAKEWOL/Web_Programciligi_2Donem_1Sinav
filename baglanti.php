<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Veri Tabanı İle Bağlantı
        $baglanti=@mysqli_connect("localhost","root","","DersDB");
        if($baglanti===false){
            die( "Bağlantı Hatası".mysqli_connect_error());
        }
        // Sayfanın Türkçe Karakterleri Desteklemesini Sağlar
        mysqli_set_charset($baglanti,"utf8");
    ?>
</body>
</html>
