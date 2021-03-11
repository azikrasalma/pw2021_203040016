<?php
/*
Azikra Salma Sabilla 
203040016
Teknik informatika A
Pemograman Web
Pertemuan 6 - Array Associative
*/

?>
<?php
// $mahasiswa = [
// 	["Azikra Salma Sabilla", "203040016", "Teknik Informatika", "azikrasal@gmail.com"],
//  ["Raden surya", "203040004", "Teknik Industri", "surrya@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Azikra Salma Sabilla", 
        "nrp" => "203040016",
        "email" => "azikrasal@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "Raden Surya", 
        "nrp" => "203040004",
        "email" => "surrya@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "foto2.jpg"
    ]
];


$films = [
    [
        "judul" => "Orphan Flowers", 
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
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
	<title>Daftar Film</title>
</head>
<body>

	<h1>Daftar Film</h1>

    <?php foreach( $films as $film ) : ?>
     <ul>
         <li>
             <img src="img/<?= $film["gambar"]; ?>">
         </li>
            <li>Judul : <?= $film["judul"] ?></li>
         <li>Sutradara : <?= $film["sutradara"] ?></li>
            <li>Rilis : <?= $film["rilis"] ?></li>
            <li>Genre : <?= $film["genre"] ?></li>
        </ul>
    <?php endforeach ?>

</body>
</html>