<?php
/*
Azikra Salma Sabilla 
203040016
Teknik informatika A
Pemograman Web
Pertemuan 7 - Request Method   GET & POSH
*/
?>

<?php 
// $_GET
$films = [
    [
        "judul" => "Hercai", 
        "sutradara" => "Cem Karcı Barış Yöş, Ali İlhan", 
        "rilis" => "2019", 
        "genre" => " Romance",
        "gambar" => "hercaii.jpg"
    ],
    [
        "judul" => "Orphan Flowers", 
        "sutradara" => "Serkan Birinci", 
        "rilis" => "2017", 
        "genre" => "Youth",
        "gambar" => "off.jpg"
    ],
    [
        "judul" => "Elif", 
        "sutradara" => "Canam Yilmaz", 
        "rilis" => "2015", 
        "genre" => "Drama",
        "gambar" => "eliff.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GET</title>
    </head>
<body>

	<h1>Daftar Film</h1>
    <ul>
    <?php foreach( $films as $film ) : ?>
        <li>
            <a href="latihan2.php?judul=<?= $film["judul"] ?>&sutradara=<?= $film["sutradara"] ?>&rilis=<?= $film["rilis"] ?>&genre=<?= $film["genre"] ?>&gambar=<?= $film["gambar"]; ?>"><?= $film["judul"] ?></a>
        </li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>