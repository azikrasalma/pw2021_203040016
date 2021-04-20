<?php 
require 'functions.php';
$id = $_GET['id'];
$Film = query("SELECT * FROM films WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $Film['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="gambar" style="margin-right: 8px;">Gambar</label>
                : <input type="text" name="gambar" id="gambar" require value="<?= $Film['gambar']; ?>"><br><br>
            </li>
            <li>
                <label for="judul" style="margin-right: 16px;">Judul</label>
                : <input type="text" name="judul" id="judul" require value="<?= $Film['judul']; ?>"><br><br>
            </li>
            <li>
                <label for="sutradara" style="margin-right: 21px;">Sutradara</label>
                : <input type="text" name="sutradara" id="sutradara" require
                    value="<?= $Film['sutradara']; ?>"><br><br>
            </li>
            <li>
                <label for="rilis" style="margin-right: 9px;">Rilis</label>
                : <input type="text" name="rilis" id="rilis" require value="<?= $Film['rilis']; ?>"><br><br>
            </li>
            <li>
                <label for="genre" style="margin-right: 10px;">Genre</label>
                : <input type="text" name="genre" id="genre" require value="<?= $Film['genre']; ?>"><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 10px;">Harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $Film['harga']; ?>"><br><br>
            </li>
            <button type="submit" name="ubah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Ubah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>