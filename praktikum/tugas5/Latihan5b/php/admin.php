<?php 
require 'functions.php';
$Film = query("SELECT * FROM films");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040016</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Judul</th>
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
                <td>
                    <a href="ubah.php?id=<?= $tipi['id'] ?>"><button
                            style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href="hapus.php?id=<?= $tipi['id']; ?>" onclick="return confirm('Hapus Data??')"><button
                            style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                </td>
                <td><img width="40px" src="../assets/img/<?= $tipi['gambar']; ?>" alt=""></td>
                <td><?= $tipi['judul']; ?></td>
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