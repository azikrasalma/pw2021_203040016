<?php 
require 'php/functions.php';
$Film = query("SELECT * FROM films");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040016</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Sutradara</th>
                <th>Rilis</th>
                <th>Genre</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Film as $tipi) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="40px" src="../Latihan5b/assets/img/<?= $tipi['gambar']; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $tipi['id']; ?>">
                        <?= $tipi["judul"]; ?>
                    </a>
                </td>
                <td><?= $tipi['sutradara']; ?></td>
                <td><?= $tipi['rilis']; ?></td>
                <td><?= $tipi['genre']; ?></td>
                <td><?= $tipi['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>