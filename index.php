<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

    
  <?php
    @include("baglanti.php");  
    $sorgu="select * from kitaplar";
    if($veri=@mysqli_query($baglanti,$sorgu)){
        echo "<table class='table table-hover table-dark'>";
        echo "<thead>
                <tr>
                    <th scope='col'>ID No</th>
                    <th scope='col'>Kitap Adı</th>
                    <th scope='col'>Kitap Türü</th>
                    <th scope='col'>Yazarı</th>
                    <th scope='col'>Sayfa Sayısı</th>
                    <th scope='col'>İşlem</th>
                </tr>
              </thead>
              <tbody>";
        while($kayit=@mysqli_fetch_array($veri)){
            echo "<tr>
                    <th scope='row'>".$kayit["kitap_id"]."</th>
                        <td>".$kayit["kitap_adi"]."</td>
                        <td>".$kayit["kitap_tur"]."</td>
                        <td>".$kayit["kitap_yazar"]."</td>
                        <td>".$kayit["kitap_sayfa"]."</td>
                        <td>
                            <a class='btn btn-danger' href='sil.php?id=".$kayit['kitap_id']."'>Sil</a>
                            <a class='btn btn-warning' href='guncelle.php?id=".$kayit['kitap_id']."'>Güncelle</a>
                        </td>
                        
                  </tr>";
            
        }
        echo "<tbody></table>";
    }

    ?>
    <hr>
    <a class="btn btn-success" href="ekle.php">Yeni Kayıt Ekle</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
