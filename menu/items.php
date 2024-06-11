<?php
require '../function.php';

// Cek apakah kode produk sudah diterima dari URL
if(isset($_GET['kp'])){
$kode_produk = $_GET['kp'];

// Ambil data produk berdasarkan kode produk
$ambilproduk = mysqli_query($con, "SELECT * FROM produk WHERE kode_produk='$kode_produk'");
$produk = mysqli_fetch_array($ambilproduk);
$namaproduk = $produk['nama_produk'];
$deskripsi = $produk['deskripsi'];
$harga = $produk['harga'];
$gambar = $produk['gambar']; // Pastikan kolom gambar ada di database dan diambil di sini
} 
else {
// Jika tidak ada kode produk, alihkan ke halaman menu atau halaman kesalahan
header("Location: ../menu.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>IBUKU BAKERY</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="bg-lightcream">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-darkbrown bg-darkbrown">
      <div class="container px-4 px-lg-5">
        <img src="../assets/logo.png" alt="IBUKU BAKERY" href="../menu.php">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="../menu.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link text-light" href="#!">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
              <ul class="dropdown-menu bg-darkbrown" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light" href="menu-breads.php">Breads</a></li>
                <li><a class="dropdown-item text-light" href="menu-cakes.php">Cakes</a></li>
                <li><a class="dropdown-item text-light" href="menu-pastry.php">Pastry</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Product section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
          <div class="col-md-6">
            <img class="card-img-top mb-5 mb-md-0" src="../assets/img/breads/<?=$gambar;?>" alt="<?=$namaproduk;?>" />
          </div>
          <div class="col-md-6">
            <div class="small mb-1">Kode Produk: <?=$kode_produk;?></div>
            <h1 class="display-5 fw-bolder"><?=$namaproduk;?></h1>
            <div class="fs-5 mb-5">
              <span>Rp. <?=number_format($harga);?></span>
            </div>
            <p class="lead"><?=$deskripsi;?></p>
            <div class="d-flex">
              <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
              <button class="btn btn-outline-dark flex-shrink-0" type="button">
                <i class="bi-cart-fill me-1"></i>
                Add to cart
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-darkbrown">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; IBUKU BAKERY 2024</p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
  </body>
</html>
