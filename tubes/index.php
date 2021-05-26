<?php
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id=2");
$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SALERO MINANG</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
  <!-------- header -------->
  <header>
    <div class="container">
      <h1><a href="index.php">SALERO MINANG </a></h1>
      <ul>
        <li><a href="produk.php">Produk</a></li>
      </ul>
    </div>
  </header>

  <!--- search --->
  <div class="search">
    <div class="container">
      <form action="produk.php">
        <input type="text" name="search" placeholder="Cari Produk">
        <input type="submit" name="cari" value="Cari Produk">
      </form>
    </div>
  </div>
  <!---- category---->
  <div class="section">
    <div class="container">
      <h3>Kategori</h3>
      <div class="box">
        <?php
        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC
        ");
        if (mysqli_num_rows($kategori) > 0) {
          while ($k = mysqli_fetch_array($kategori)) {
        ?>
            <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
              <div class="col-5">
                <img src="img/download.jfif" width="50px" style="margin-bottom: 5px;">
                <p><?php echo $k['category_name'] ?></p>
              </div>
            </a>
          <?php }
        } else { ?>
          <p>Kategori Tidak Ada</p>
        <?php } ?>
      </div>
    </div>
  </div>

  <!--- new product --->
  <div class="section">
    <div class="container">
      <h3>Produk Terbaru</h3>
      <div class="box">
        <?php
        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
        ?>
            <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
              <div class="col-4">
                <img src="produk/<?php echo $p['product_image'] ?>">
                <p class="nama"><?php echo $p['product_name'] ?></p>
                <p class="harga">Rp.<?php echo number_format($p['product_price']) ?></p>
              </div>
            </a>
          <?php }
        } else { ?>
          <p>Produk Tidak Ada</p>
        <?php } ?>
      </div>
    </div>
  </div>

  <!--- footer---->
  <div class="footer">
    <div class="container">
      <h4>Alamat</h4>
      <p><?php echo $a->admin_address ?></p>

      <h4>Email</h4>
      <p><?php echo $a->admin_email ?></p>

      <h4>No. Hp</h4>
      <p><?php echo $a->admin_telp ?></p>
      <small>Copyright &copy; 2021 - Salero Minang.</small>
    </div>
  </div>

</body>

</html>