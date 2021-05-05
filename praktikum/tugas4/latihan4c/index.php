<?php
require 'php/functions.php';
$films = query("SELECT * FROM films")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 4b</title>
</head>

<body>
  <h1>Daftar Film</h1>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Judul</th>
      <th>Sutradara</th>
      <th>Rilis</th>
      <th>Genre</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($films as $film) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="assets/img/<?= $film["img"]; ?>"></td>
        <td><?= $film["judul"]; ?></td>
        <td><?= $film["sutradara"]; ?></td>
        <td><?= $film["rilis"]; ?></td>
        <td><?= $film["genre"]; ?></td>
        <td><?= $film["harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach ?>
  </table>
</body>

</html>