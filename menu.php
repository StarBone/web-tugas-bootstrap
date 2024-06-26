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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./css/main.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body class="bg-lightcream">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-darkbrown bg-transparent fixed-top transparent">
      <div class="container px-4 px-lg-5">
        <a href="menu.php"><img src="./assets/logo.png" alt="IBUKU BAKERY"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="menu.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link text-light" href="#!">About</a></li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-light"
                id="navbarDropdown"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >Shop</a
              >
              <ul class="dropdown-menu bg-darkbrown" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light" href="menu/menu-breads.php">Breads</a></li>
                <li><a class="dropdown-item text-light" href="menu/menu-cakes.php">Cakes</a></li>
                <li><a class="dropdown-item text-light" href="menu/menu-pastry.php">Pastry</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Carousel -->
    <div id="hero-carousel" class="carousel slide shadow" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/carousel/1.jpg" class="d-block w-100" alt="Slide 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Freshly Baked Breads</h5>
            <p>Enjoy our variety of freshly baked breads.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img/carousel/2.jpg" class="d-block w-100" alt="Slide 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Delicious Cakes</h5>
            <p>Perfect for every occasion.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img/carousel/3.jpg" class="d-block w-100" alt="Slide 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Exquisite Pastries</h5>
            <p>Treat yourself with our delicate pastries.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Section-->
    <section class="py-5" style="background-image: url('./assets/img/bg/hero.png')">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
          <div class="col mb-5">
            <div class="card h-100 bg-medcream border border-0">
              <!-- Product image-->
              <img class="card-img-top" src="./assets/img/thumbnail/breads.jpg" alt="..." />
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Breads</h5>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn bg-darkbrown fw-medium text-light mt-auto" href="./menu/menu-breads.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100 bg-medcream border border-0">
              <!-- Product image-->
              <img class="card-img-top" src="./assets/img/thumbnail/pd.jpg" alt="..." />
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Pastry</h5>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn bg-darkbrown fw-medium text-light mt-auto" href="./menu/menu-pastry.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100 bg-medcream border border-0">
              <!-- Product image-->
              <img class="card-img-top" src="./assets/img/thumbnail/cakes.jpg" alt="..." />
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Cakes</h5>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn bg-darkbrown fw-medium text-light mt-auto" href="./menu/menu-cakes.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-darkbrown">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; IBUKU BAKERY 2024
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./js/scripts.js"></script>
  </body>
</html>
