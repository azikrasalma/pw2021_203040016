<?php
require 'php/functions.php';
$Film = query("SELECT * FROM films")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/mantap.css">
    <title>Azikra</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Azikra Film</h1>

        <a href="php/login.php" class="waves-effect waves-light blue btn-small">Login Halaman Admin</a>

        <table class="centered highlight - white-text grey darken-3">
            <tr class="z-depth-5 red darken-3 white-text">
                <th>No</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Sutradara</th>
                <th style="text-align: center;">Rilis</th>
                <th style="text-align: center;">Genre</th>
                <th style="text-align: center;">Harga</th>
                <th style="text-align: center;">Foto</th>
                <th style="text-align: center;">Detail</th>
            </tr>
            <?php $i = 1?>
            <?php foreach ($Film as $Movies): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$Movies["judul"];?></td>
                <td><?=$Movies["sutradara"];?></td>
                <td><?=$Movies["rilis"];?></td>
                <td><?=$Movies["genre"];?></td>
                <td><?=$Movies["harga"];?></td>
                <td><img width="100px" src="assets/img/<?=$Movies["gambar"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="php/detaill.php?id=<?=$Movies['id'];?>">Lihat Produk</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
    </div>
</body>

</html>