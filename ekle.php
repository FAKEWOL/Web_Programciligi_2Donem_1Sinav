<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <!-- Veri Eklemek İçin Form Sayfası-->
        <h3 style="text-align: center;">Yeni Kayıt Eklme Formu</h3>
        <form action="ekle_sonuc.php" method="post" name="kayit_formu">
        <table>
            <tr>
                <td>Kitap Adi:</td>
                <td><input name="kitap_adi" type="text" size="20"></td>
            </tr>
            <tr>
                <td>Kitap Turu:</td>
                <td><input name="kitap_tur" type="text" size="20"></td>
            </tr>
            <tr>
                <td>Kitap Yazarı:</td>
                <td><input name="kitap_yazar" type="text" size="20"></td>
            </tr>
            <tr>
                <td>Kitap Sayfa Sayısı:</td>
                <td><input name="kitap_sayfa_sayisi" type="number" size="20"></td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Kaydet" name="kaydet">
                <input type="reset" value="Temizle" name="temizle">
                <a href="index.php">kitap Listesi</a>
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>
