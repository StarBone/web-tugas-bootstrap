<?php
  require 'logincek.php';

  if (isset($_GET['delete'])) {
    $kode_produk = $_GET['delete'];
    
    // Query untuk menghapus data produk berdasarkan kode_produk
    $deleteQuery = "DELETE FROM produk WHERE kode_produk='$kode_produk'";
    $result = mysqli_query($con, $deleteQuery);

    $resetAIQuery = "ALTER TABLE produk AUTO_INCREMENT = 1";
    mysqli_query($con, $resetAIQuery);
    
    if ($result) {
        echo "<script>alert('Data berhasil dihapus');</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
    header("Location: stock.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="css/index.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.php">Ibuku Bakery</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <a class="nav-link" href="stock.php">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-boxes-stacked"></i>
                </div>
                Stok Barang
              </a>
              <a class="nav-link" href="masuk.php">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-right-to-bracket"></i>
                </div>
                Barang Masuk
              </a>
              <a class="nav-link" href="pelanggan.php">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-users"></i>
                </div>
                Pelanggan
              </a>
              <div class="sb-sidenav-menu-heading">Interface</div>
              <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
              </div>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePages"
                aria-expanded="false"
                aria-controls="collapsePages"
              >
                <div class="sb-nav-link-icon">
                  <i class="fas fa-book-open"></i>
                </div>
                Pages
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion"
              >
                <nav
                  class="sb-sidenav-menu-nested nav accordion"
                  id="sidenavAccordionPages"
                >
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false"
                    aria-controls="pagesCollapseAuth"
                  >
                    Authentication
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseAuth"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="login.html">Login</a>
                      <a class="nav-link" href="register.html">Register</a>
                      <a class="nav-link" href="password.html"
                        >Forgot Password</a
                      >
                    </nav>
                  </div>
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseError"
                    aria-expanded="false"
                    aria-controls="pagesCollapseError"
                  >
                    Error
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseError"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="401.html">401 Page</a>
                      <a class="nav-link" href="404.html">404 Page</a>
                      <a class="nav-link" href="500.html">500 Page</a>
                    </nav>
                  </div>
                </nav>
              </div>
              <div class="sb-sidenav-menu-heading">Addons</div>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Data Pesanan</h1>
            <ol class="breadcrumb bg-light  mb-4">
              <li class="breadcrumb-item active">Selamat Datang</li>
            </ol>
            <div class="container mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Barang
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Kolom Modal -->
                    <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" required>
                        <input type="text" name="nama_produk" class="form-control mt-2" placeholder="Nama Produk" required>
                        <input type="text" name="deskripsi" class="form-control mt-2 " placeholder="Deskripsi" required>
                        <input type="number" name="stok" class="form-control mt-2" placeholder="Stock Awal" required>
                        <input type="number" name="harga" class="form-control mt-2" placeholder="Harga" required>
                        <input type="file" name="image" accept=".jpg, .jpeg, .png" class="form-control mt-2" placeholder="File" value="">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="tambahbarang">Submit</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Tabel Barang
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Produk</th>
                      <th>Nama Produk</th>
                      <th>Deskripsi</th>
                      <th>Stock</th>
                      <th>Harga Produk</th>
                      <th>gambar</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $ambilsemuadata = mysqli_query($con, "SELECT * FROM produk");
                      $i = 1;
                      while ($data = mysqli_fetch_array($ambilsemuadata)) {
                        $kodeproduk = $data['kode_produk'];
                        $namaproduk = $data['nama_produk'];
                        $deskripsi = $data['deskripsi'];
                        $harga = $data['harga'];
                        $stok = $data['stok'];
                        $gambar = $data['gambar'];
                    ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $kodeproduk; ?></td>
                      <td><?= $namaproduk; ?></td>
                      <td><?= $deskripsi; ?></td>
                      <td><?= $harga; ?></td>
                      <td><?= $stok; ?></td>
                      <td><img src="<?= $gambar; ?>" width="100" height="100"></td>
                      <td>
                        <a href="stock.php?delete=<?= $kodeproduk; ?>" onclick="confirmDeletion('stock.php?delete=<?= $kodeproduk; ?>')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php
                      };
                    ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Ibuku Bakery 2023</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
