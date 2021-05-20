<?php
session_start();
if ($_SESSION['status_login'] != true) {
  echo '<script> window.location= "login.php"</script>';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SALERO MINANG</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>


<body>
  <!------- header ------->
  <header>
    <div class="container">
      <h1><a href="dashboard.php"> SALERO MINANG </h1>
      <ul>
        <li><a href="dashboard.php">Dashboard</li>
        <li><a href="profile.php">Profile</li>
        <li><a href="kategori.php">Kategori</li>
        <li><a href="produk.php">Produk</li>
        <li><a href="logout.php">Logout</li>
      </ul>
    </div>
  </header>


  <!------ content ----->
  <div class="section">
    <div class="container">
      <h3>Dashboard</h3>
      <div class="box">
        <h4>Salmaik Datang <?php echo $_SESSION['a_global']->admin_name ?> di Toko Online Kami</h4>
      </div>
    </div>
  </div>


  <!------ footer ------>
  <footer>
    <div class="container">
      <small>Copyright &copy; 2021 - SaleroMinang.</small>
    </div>
  </footer>
</body>

</html>