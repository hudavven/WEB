<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urunler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="navbar">
    <div class="container text-warning mt-1">
        <h1 >Teknoloji Dünyası</h1>
    </div>

    <nav class="container navbar navbar-expand-lg bg-body-secondary text-body">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-body">
                    <li class="nav-item ">
                        <a class="nav-link text-secondary" href="anaSayfa.php"><b>Anasayfa</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="urunler.php"><b>Ürünler</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="iletisim.php"><b>İletişim</b></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</div>


<div class="main">
    <div class="container text-center mt-3">
        <h4>Ürünler</h4>
    </div>

    <div class="container">
        <?php
        $urunler = [
            ["isim" => "Laptop", "fiyat" => 5000, "aciklama" => "Yüksek performanslı laptop", "foto" => "laptop.jpg"],
            ["isim" => "Telefon", "fiyat" => 3000, "aciklama" => "Akıllı telefon", "foto" => "telefon.jpg"],
            ["isim" => "Tablet", "fiyat" => 2000, "aciklama" => "Portatif tablet", "foto" => "tablet.jpg"],
            ["isim" => "Monitör", "fiyat" => 1500, "aciklama" => "4K monitör", "foto" => "monitor.jpg"],
            ["isim" => "Klavye", "fiyat" => 200, "aciklama" => "Mekanik klavye", "foto" => "klavye.jpg"],
            ["isim" => "Mouse", "fiyat" => 100, "aciklama" => "Kablosuz mouse", "foto" => "mouse.jpg"],
            ["isim" => "Yazıcı", "fiyat" => 700, "aciklama" => "Renkli yazıcı", "foto" => "yazici.jpg"],
            ["isim" => "Hoparlör", "fiyat" => 250, "aciklama" => "Bluetooth hoparlör", "foto" => "hoparlor.jpg"],
            ["isim" => "Kulaklık", "fiyat" => 150, "aciklama" => "Gürültü önleyici kulaklık", "foto" => "kulaklik.jpg"],
            ["isim" => "Webcam", "fiyat" => 300, "aciklama" => "HD webcam", "foto" => "webcam.jpg"],
            ["isim" => "Mikrofon", "fiyat" => 400, "aciklama" => "Stüdyo mikrofonu", "foto" => "mikrofon.jpg"],
            ["isim" => "SSD", "fiyat" => 600, "aciklama" => "1TB SSD", "foto" => "ssd.jpg"],
            ["isim" => "HDD", "fiyat" => 300, "aciklama" => "2TB HDD", "foto" => "hdd.jpg"],
            ["isim" => "Router", "fiyat" => 350, "aciklama" => "Kablosuz router", "foto" => "router.jpg"],
            ["isim" => "RAM", "fiyat" => 500, "aciklama" => "16GB RAM", "foto" => "ram.jpg"],
            ["isim" => "GPU", "fiyat" => 4000, "aciklama" => "Oyun için grafik kartı", "foto" => "gpu.jpg"]
        ];


        echo "<div class='row p-2'>";

        foreach ($urunler as $urun)
        {
            echo " <div class='card m-2 col-sm-12' style='width: 19rem'>";
            echo "<div class='card-body col-sm-12'>";

            echo " <img src='./assets/img/urunler/".$urun["foto"]."' class='card-img-top' >";

            echo "<p class='card-text mt-3'><b>".$urun["isim"]."</b></p>";
            echo "<p>".$urun["fiyat"]. " TL</p>";
            echo "<p>".$urun["aciklama"]."</p>";
            echo "<a  class='btn text-light' style='width: 100%;background-color: orange;border-radius: 0px;'>Sepete Ekle</a>";

            echo " </div>";
            echo " </div>";


        };

        echo " </div>";

        ?>


    </div>

</div>


<div class="footer">
    <div class="container">
        <p class="bg-secondary-subtle p-3" >©2024 Her hakkı Adınız Soyadınız'a aittir.</p>
    </div>

</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
