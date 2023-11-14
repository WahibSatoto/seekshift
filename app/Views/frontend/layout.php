<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>SEEKSHIFT - Search Job Now</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="<?= base_url() ?>frontend/img/logo-short.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('backend/modules/fontawesome/css/all.min.css') ?>">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url() ?>frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url() ?>frontend/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
      <a href="index.html" class="navbar-brand ml-lg-3">
        <img src="<?= base_url() ?>frontend/img/logo.png" alt="" style="width: 195px" />
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
          <a href="<?= site_url('/landingpage') ?>" class="nav-item nav-link active">Home</a>
          <a href="<?= site_url('/jobsearch') ?>" class="nav-item nav-link">Cari Pekerjaan</a>
          <a href="<?= site_url('/maintenance') ?>" class="nav-item nav-link">Post Lowongan Kerja</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
            <div class="dropdown-menu rounded-0 m-0">
              <a href="<?= site_url('/maintenance') ?>" class="dropdown-item">Blog</a>
              <a href="<?= site_url('/maintenance') ?>" class="dropdown-item">Partnership</a>
            </div>
          </div>
          <a href="<?= site_url('maintenance') ?>" class="nav-item nav-link">Kontak</a>
        </div>
        <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Login</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->

  <?= $this->renderSection('konten') ?>

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-7 col-md-6">
        <div class="row">
          <div class="col-md-6 mb-5">
            <h3 class="text-primary mb-4">Get In Touch</h3>
            <p>
              <i class="fa fa-map-marker-alt mr-2"></i>Jl.Panggang-Wonosari
              KM.25, Blimbing RT005 RW005, Girisekar, Panggang, Gunungkidul,
              Yogyakarta, Indonesia
            </p>
            <p><i class="fa fa-phone-alt mr-2"></i>+6283843438411 (Wahib)</p>
            <p><i class="fa fa-envelope mr-2"></i>infoseekshift@gmail.com</p>
            <div class="d-flex justify-content-start mt-4">
              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <h3 class="text-primary mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-white mb-2" href="<?= site_url('/landingpage') ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
              <a class="text-white mb-2" href="<?= site_url('/jobsearch') ?>"><i class="fa fa-angle-right mr-2"></i>Cari Pekerjaan</a>
              <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Post Pekerjaan</a>
              <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Partnership</a>
              <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 mb-5">
        <h3 class="text-primary mb-4">News User</h3>
        <p>
          Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum
          sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo
          eirmod sea justo no lorem est diam
        </p>
        <div class="w-100">
          <div class="input-group">
            <input type="text" class="form-control border-light" style="padding: 30px" placeholder="Your Email Address" />
            <div class="input-group-append">
              <button class="btn btn-primary px-4">Daftar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3e3e4e !important">
    <div class="row">
      <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
        <p class="m-0 text-white">
          &copy; <a href="#">Seekshift</a>. All Rights Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Supported by <a href="">WahibDev</a>
        </p>
      </div>
      <div class="col-lg-6 text-center text-md-right">
        <ul class="nav d-inline-flex">
          <li class="nav-item">
            <a class="nav-link text-white py-0" href="#">Privacy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white py-0" href="#">Terms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white py-0" href="#">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white py-0" href="#">Help</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url('backend/modules/jquery.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url() ?>frontend/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>frontend/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>frontend/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>frontend/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="<?= base_url() ?>frontend/mail/jqBootstrapValidation.min.js"></script>
  <script src="<?= base_url() ?>frontend/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url() ?>frontend/js/main.js"></script>
</body>

</html>