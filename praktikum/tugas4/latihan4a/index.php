<?php
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
mysqli_select_db($conn, "pw_tubes_203040016") or die("Database salah!");
$result = mysqli_query($conn, "SELECT * FROM films");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NETFILM</title>
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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="assets/img/<?= $row["img"]; ?>"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["sutradara"]; ?></td>
        <td><?= $row["rilis"]; ?></td>
        <td><?= $row["genre"]; ?></td>
        <td><?= $row["harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </table>
</body>

</html>