<?php 
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$Film = query("SELECT * FROM films WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040016</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img width="120px" src="../assets/img/<?= $Film["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $Film["judul"]; ?></p>
            <p><?= $Film["sutradara"]; ?></p>
            <p><?= $Film["rilis"]; ?></p>
            <p><?= $Film["genre"]; ?></p>
            <p><?= $Film["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>