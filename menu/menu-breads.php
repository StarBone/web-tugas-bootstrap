<?php
require '../function.php';

$get = mysqli_query($con, "SELECT * FROM produk");

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
    <!-- Header-->
    <header class="bg-header2 py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="text-medcream display-4 fw-bolder" style="text-decoration: underline double 3px">Breads</h1>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5" style="background-image: url('../assets/img/bg/hero.png')">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php while($row = mysqli_fetch_array($get)) { ?>
                    <div class="col mb-5">
                        <div class="card h-100 bg-darkbrown border border-0">
                            <!-- Product image-->
                            <img class="card-img-top" src="../<?= $row['gambar']; ?>" alt="<?= $row['nama_produk']; ?>" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center text-light">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $row['nama_produk']; ?></h5>
                                    <!-- Product price-->
                                    <p class="fw-100">IDR <?= number_format($row['harga']); ?></p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn bg-medcream fw-semibold text-dark mt-auto" href="items.php?kp=<?= $row['kode_produk']; ?>">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>
</html>
