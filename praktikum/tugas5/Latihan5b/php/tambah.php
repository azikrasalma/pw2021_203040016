<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040016</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="font-family: Arial, sans-serif;">
    <h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul style="list-style: none;">
            <li>
                <label for="judul" style="margin-right: 8px;">Masukan Judul Film</label>
                : <input type="text" name="judul" placeholder="azikra film" id="judul" require><br><br>
            </li>
            <li>
                <label for="sutradara" style="margin-right: 16px;">Sutradara</label>
                : <input type="text" name="sutradara" placeholder="azikra.com" id="sutradara" require><br><br>
            </li>
            <li>
                <label for="rilis" style="margin-right: 21px;">Rilis</label>
                : <input type="text" name="rilis" placeholder="2019" id="rilis" require><br><br>
            </li>
            <li>
                <label for="genre" style="margin-right: 9px;">Genre</label>
                : <input type="text" name="genre" placeholder="romantis" id="genre" require><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 7px;">Harga</label>
                : <input type="text" name="harga" placeholder="100.000" id="harga" require><br><br>
            </li>
            <li>
                <label for="gambar" style="margin-right: 7px;">Gambar</label>
                : <input type="text" name="gambar" placeholder="azikra.jpg" id="gambar" require><br><br>
            </li>
            <button type="submit" name="tambah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>