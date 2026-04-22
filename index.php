<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Kitap Listesi</title>
  </head>
  <body>
    <div class="container">
      <?php
        @include('baglanti.php');
        $sorgu = "SELECT * FROM kitaplar";
        if ($veri = @mysqli_query($baglanti, $sorgu)) {
          echo "<table class='table table-hover table-dark'>";
          echo "<thead><tr><th>ID No</th><th>Kitap Adı</th><th>Kitap Türü</th><th>Yazarı</th><th>Sayfa Sayısı</th><th>İşlem</th></tr></thead><tbody>";
          while ($kayit = @mysqli_fetch_array($veri)) {
            echo "<tr><th scope='row'>{$kayit['kitap_id']}</th><td>{$kayit['kitap_adi']}</td><td>{$kayit['kitap_tur']}</td><td>{$kayit['kitap_yazar']}</td><td>{$kayit['kitap_sayfa']}</td><td><a class='btn btn-danger' href='sil.php?id={$kayit['kitap_id']}'>Sil</a><a class='btn btn-warning' href='guncelle.php?id={$kayit['kitap_id']}'>Güncelle</a></td></tr>";
          }
          echo "</tbody></table>";
        }
      ?>
      <hr>
      <a class="btn btn-success" href="ekle.php">Yeni Kayıt Ekle</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLxwSjbBQrAxW50epdHgVQ9/7MxJzRILYqNtyZK7hUa+ZcIiZnqy1l6m2XvFp2j6t" crossorigin="anonymous"></script>
  </body>
</html>