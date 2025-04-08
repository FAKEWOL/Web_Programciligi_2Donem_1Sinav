<?php
    @include("baglanti.php");
    $gelenId=$_GET["id"];
    $sorgu="delete from kitaplar where kitap_id ='$gelenId'";
    if(@mysqli_query($baglanti,$sorgu))
    {
        echo"Silme İşlemi Başarılı";
        header("Refresh:2;index.php");
    }
    else
    {
        echo "Silme İşlemi Başarısız";
    }
    mysqli_close($baglanti);
?>
