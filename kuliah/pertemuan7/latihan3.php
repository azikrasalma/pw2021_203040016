<?php
/*
Azikra Salma Sabilla 
203040016
Teknik informatika A
Pemograman Web
Pertemuan 7 - Request Method   GET & POSH
*/
?>

<!DOCTYPE html>
<head>
    <title>POST</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Hallo, Selamat Datang <?= $_POST["judul"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukan Judul Film:
    <input type="text" name="judul">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>   
</body>
</html>