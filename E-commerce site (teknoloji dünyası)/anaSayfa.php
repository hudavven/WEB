<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body >

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
    <div class="container mt-2">
        <h5>Hoş Geldiniz</h5>

        <p>En İyi Bilgisayar Ürünlerini Keşfedin!</p>
        <p>Bilgisayar ihtiyaçlarınızı en kaliteli ve uygun fiyatlı ürünlerle karşılamak için buradayız. Yüksek performanslı laptoplardan, modern ve ergonomik klavyelere kadar geniş bir ürün yelpazesi sunuyoruz. İster profesyonel bir oyuncu, ister evde çalışan bir profesyonel olun, her türlü ihtiyacınıza uygun çözümlerle karşınızdayız.</p>
        <img src="assets/img/anasayfa.jpg" style="width:100%">

        <h5 class="mt-3">Neden Bizi Seçmelisiniz?</h5>
        <ul>
            <li><b>Geniş Ürün Yelpazesi:</b> Laptoplar, tabletler, telefonlar, monitörler, klavyeler, mouse'lar, yazıcılar, hoparlörler, kulaklıklar, webcamler, mikrofonlar, SSD ve HDD'ler, RAM ve grafik kartları dahil olmak üzere her türlü bilgisayar donanımını bulabilirsiniz.</li>
            <li><b>Uygun Fiyatlar:</b> Yüksek kaliteyi en uygun fiyatlarla sunuyoruz. Düzenli olarak yaptığımız kampanyalar ve indirimlerle müşterilerimize avantajlar sağlıyoruz.</li>
            <li><b>Güvenli Alışveriş:</b> Güvenli ödeme yöntemleri ve müşteri gizliliğine verdiğimiz önemle alışverişlerinizi gönül rahatlığıyla yapabilirsiniz.</li>
            <li><b>Hızlı Kargo:</b> Siparişlerinizi en kısa sürede adresinize ulaştırmak için hızlı ve güvenilir kargo hizmetleri sunuyoruz.</li>
            <li><b>Müşteri Memnuniyeti:</b> Her zaman müşteri memnuniyetini ön planda tutarak, satış öncesi ve sonrası destek hizmetleri ile yanınızdayız.</li>
        </ul>

        <h5>Öne Çıkan Ürünlerimiz</h5>

        <ul>
            <?php
            $urun_kategorileri = [
                "Yüksek Performanslı Laptoplar",
                "Akıllı Telefonlar",
                "Portatif Tabletler",
                "4K Monitörler",
                "Mekanik Klavyeler",
                "Kablosuz Mouse'lar",
                "Renkli Yazıcılar",
                "Bluetooth Hoparlörler",
                "Gürültü Önleyici Kulaklıklar",
                "HD Webcamler",
                "Stüdyo Mikrofonları",
                "1TB SSD ve 2TB HDD'ler",
                "Kablosuz Routerlar",
                "16GB RAM Modülleri",
                "Oyun için Grafik Kartları"
            ];

            foreach ($urun_kategorileri as $urun)
            {
                echo "<li>$urun</li>";
            }

            ?>
        </ul>
        <p>Siz de hemen alışverişe başlayın ve ihtiyaçlarınıza uygun ürünleri en avantajlı fiyatlarla satın alın!</p>

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