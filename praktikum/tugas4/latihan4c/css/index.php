<!--
    AZIKRA SALMA SABILLA
    203040016
-->

<?php
$Films =[
    [
        "judul" => "Hercai", 
        "sutradara" => "Cem Karcı Barış Yöş, Ali İlhan", 
        "rilis" => "2019", 
        "genre" => " Romance",
        "harga" => "115.000",
        "gambar" => "hercaii.jpg"
    ],
    [
        "judul" => "Orphan Flowers", 
        "sutradara" => "Serkan Birinci", 
        "rilis" => "2017", 
        "genre" => "Youth",
        "harga" => "110.000",
        "gambar" => "off.jpg"
    ],
    [
        "judul" => "Elif", 
        "sutradara" => "Canam Yilmaz", 
        "rilis" => "2015", 
        "genre" => "Drama",
        "harga" => "98.000",
        "gambar" => "eliff.jpg"
    ],
    [
        "judul" => "Christmas Prince",
        "sutradara" => "John Schultz, Alex Zamm",
        "genre" => "Romance, Comedy",
        "harga" => "Rp. 98.000,-",
        "gambar" => "CP.jpg" 
    ],
    [
        "judul" => "Paramparca",
        "sutradara" => "Cevdet Mercan, Altan Donmez, Orkun Catak",
        "genre" => "Drama",
        "harga" => "Rp. 97.000,-",
        "gambar" => "paca.jpg" 
    ],
    [
        "judul" => "Muhtesem Yuzyil Kosem",
        "sutradara" => "Durul Taylan, Mert Baykal",
        "genre" => "Roman, Action",
        "harga" => "Rp. 97.000,-",
        "gambar" => "MYK.jpg" 
    ],
    [
        "judul" =>" The Princesss switch",
        "sutradara" => "Michael Rohl",
        "genre" => "Romance, Comedy",
        "harga" => "Rp. 97.000,-",
        "gambar" => "TPS.jpg" 
    ],
    [
        "judul" => "The Chonicles Of Narnia",
        "sutradara" => "Andrew Adamson",
        "genre" => "Actin, Fantasy, Adventure",
        "harga" => "Rp. 96.000,-",
        "gambar" => "090.jpg" 
    ],
   
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>NETFILM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Sutradara</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($Films as $film) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $film["gambar"]; ?>"></td>
                    <td><b><?= $film["judul"]; ?></b></td>
                    <td><b><?= $film["sutradara"]; ?></b></td>
                    <td><b><?= $film["genre"]; ?></b></td>
                    <td><b><?= $film["harga"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>