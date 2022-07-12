<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Menghitung Nilai Depresiasi - PSE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">PSE</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Straight Line</a></li>
          <li><a class="nav-link scrollto" href="#services">Reducing Balance</a></li>
          <li><a class="nav-link scrollto o" href="#portfolio">Sum of the Year</a></li>
          <li><a class="nav-link scrollto" href="#team">Unit of Activity</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Metode Depresiasi</h1>
          <h2>Perancangan Sistem Entreprise</h2>
          <h2>Ahya Ihsan Fairuzsyifa (L200190208)</h2>
        </div>
      </div>
      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-stack-line"></i></div>
            <h4 class="title"><a href="">Straight Line</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-palette-line"></i></div>
            <h4 class="title"><a href="">Reducing Balance</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-command-line"></i></div>
            <h4 class="title"><a href="">Sum of the Year</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-fingerprint-line"></i></div>
            <h4 class="title"><a href="">Unit of Activity</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Straight Line Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Straight Line</h2>
        </div>
        <center>
          <div class="container text-black">
              <?php
              $HP=null;
              $NR=null;
              $UE=null;
              if (isset($_GET['HP'])) {
                  $HP=$_GET['HP'];
                  $NR=$_GET['NR'];
                  $UE=$_GET['UE'];
                  $hasil=($HP-$NR)/$UE;
              }
              ?>
              <div class="row">
                  <form action="index.php" method="POST">
                      <h2><b><center> Straight Line Depreciation : Depreciation per annum </center></b></h2>
                      <div class="form-group">
                          <label>Cost :</label>
                          <input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
                      </div>
                      <div class="form-group">
                          <label>Residu Value :</label>
                          <input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required>
                      </div>
                      <div class="form-group">
                          <label>Useful Value(Years) :</label>
                          <input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required>
                      </div>
                      <br>
                      <button type="button" class="btn btn-danger" onclick="location.href='?'">Hapus</button>
                      <button type="submit" class="btn btn-primary">Hitung</button>
                  </form>
                  <br>
                  <?php
                  if (isset($_GET['HP'])) {
                      $hasil = "$" .number_format($hasil,0,',','.');
                      echo "<h1>$hasil</h1>" ;
                  }
                  ?>
              </div>
        </center>
      </div>
    </section><!-- End Straight Line Section -->

    <!-- ======= Reducing Balance Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Reducing Balance</h2>
        </div>
        <center>
          <div class="container text-black">
            <?php
              $HP=null;
              $NR=null;
              $UE=null;
              if (isset($_GET['HP'])) {
                $HP=$_GET['HP'];
                $NR=$_GET['NR'];
                $UE=$_GET['UE'];
                $XX=$UE/100;
                $hasil=($HP-$NR)*$XX;
              }
            ?>
          <div class="rows">
            <form action="index.php" method="POST">
              <h2><b><center> Reducing Balance Depreciation </center></b></h2>
              <div class="form-group">
                <label>net book value  :</label>
                <input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
              </div>
              <div class="form-group">
                <label>residual value :</label>
                <input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required>
              </div>
              <div class="form-group">
                <label>rate% :</label>
                <input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required>
              </div>
              <br>
              <button type="button" class="btn btn-danger" onclick="location.href='?'">Hapus</button>
              <button type="submit" class="btn btn-primary">Hitung</button>
          </form>
          <br>
          <?php
            if (isset($_GET['HP'])) {
              $hasil = "$" .($hasil);
              echo "<h1>$hasil</h1>" ;
            }
          ?>
          </div>
          </div>
        </center>
      </div>
    </section><!-- End Reducing Balance Section -->

    <!-- ======= Sum of the Year Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sum of the Year</h2>
        </div>
        <center>
          <div class="container text-black">
            <?php
              $perolehan=null;
              $residu=null;
              $umur=null;
              if (isset($_GET['perolehan'])) {
                  $perolehan=$_GET['perolehan'];
                  $residu=$_GET['residu'];
                  $umur=$_GET['umur'];
                  $jml_umur = 0;
                  for ($i=1; $i<=$umur ; $i++) { 
                      $jml_umur = $jml_umur + $i;
                  }
                  $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
              }
            ?>
            <div class="rows">
              <form action="index.php" method="POST">
                <h2><b><center> SUM OF THE YEAR </center></b></h2>
                <div class="form-group">
                  <label>Harga Perolehan:</label>
                  <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nilai Residu:</label>
                  <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
                </div>
                <div class="form-group">
                  <label>Umur Ekonomis (Tahun):</label>
                  <input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>"  required>
                </div>
                <br>
                <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Hapus</button>
                <button type="submit" class="btn btn-primary">Hitung</button>
              </form>
              <br>
              <?php
              if (isset($_GET['perolehan'])) {
                  $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',',);
                  echo "<h1>$hasil</h1>" ;
              }
              ?>
            </div>
          </div>
        </center>
      </div>
    </section><!-- End Sum of the Year Section -->

    <!-- ======= Unit of Activity Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Unit of Activity</h2>
        </div>
        <center>
          <div class="container text-black">
            <?php
              $HP=null;
              $NR=null;
              $UE=null;
              $UU=null;
              if (isset($_GET['HP'])) {
                  $HP=$_GET['HP'];
                  $NR=$_GET['NR'];
                  $UE=$_GET['UE'];
                  $UU=$_GET['UU'];
                  $hasil=($HP-$NR)*($UE/$UU);
              }
            ?>
            <div class="rows">
              <form action="index.php" method="POST">
                  <h2><b><center> Units of Activity Depreciation : Units of Production Depreciation</center></b></h2>
                <div class="form-group">
                  <label>Costing  :</label>
                  <input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
                </div>
                <div class="form-group">
                  <label>Estimated Capacity to Process :</label>
                  <input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required>
                </div>
                <div class="form-group">
                  <label>First Year Production :</label>
                  <input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required>
                </div>
                <div class="form-group">
                  <label>Residu Value :</label>
                  <input type="text" name="UU" class="form-control" value="<?php echo $UU; ?>"  required>
                </div>
                <br>
                <button type="button" class="btn btn-danger" onclick="location.href='?'">Hapus</button>
                <button type="submit" class="btn btn-primary">Hitung</button>
              </form>
              <br>
              <?php
                if (isset($_GET['HP'])) {
                  $hasil = "$" .($hasil);
                  echo "<h1>$hasil</h1>" ;
                }
              ?>
            </div>
          </div>
        </center>
      </div>
    </section><!-- End Unit of Activity Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PSE</h3>
            <p>
              Ahya Ihsan Fairuzsyifa<br>
              L200190208<br>
               <br><br>
              <strong>Phone:</strong> +6285156637279<br>
              <strong>Email:</strong> l200190208@student.ums.ac.id<br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Metode Depresiasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Straight Line</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reducing Balance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sum of the Year</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Unit of Activity</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Ahya Ihsan Fairuzsyifa</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by L200190208</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>