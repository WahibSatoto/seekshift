<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Administrator | SEEKSHIFT</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('backend/modules/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('backend/modules/fontawesome/css/all.min.css') ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('backend/modules/jqvmap/dist/jqvmap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('backend/modules/summernote/summernote-bs4.css') ?>">
  <link rel="stylesheet" href="<?= base_url('backend/modules/owlcarousel2/dist/assets/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('backend/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('backend/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('backend/css/components.css') ?>">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg bg-primary"></div>
      <nav class="navbar navbar-expand-lg main-navbar bg-primary">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= base_url('backend/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1') ?>">
              <div class="d-sm-none d-lg-inline-block"><?= session()->get('adminnama') ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Administrator</div>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= site_url('loginadmin/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"><img class="img-fluid" style="width:60%" src="<?= base_url('backend/img/1.png') ?>" alt=""></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"> <img class="img-fluid" style="width:70%" src="<?= base_url('backend/img/2.png') ?>" alt=""> </a>
          </div>
          <ul class=" sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="<?= site_url('/administrator/index') ?>"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Lokasi</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= site_url('/lokasi') ?>">Daftar Data Lokasi</a></li>
                <li><a href="<?= site_url('/lokasi/tambah') ?>">Tambah Lokasi</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kategori</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= site_url('/kategori') ?>">Daftar Data Kategori</a></li>
                <li><a class="nav-link beep beep-sidebar" href="<?= site_url('/kategori/tambah') ?>">Tambah Kategori</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Admin</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= site_url('/admin') ?>">Data Admin</a></li>
                <li><a href="<?= site_url('/admin/tambah') ?>">Tambah Admin</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Lowongan Kerja</span></a>
              <ul class="dropdown-menu">
                <li><a href="<?= site_url('/loker') ?>">Data Loker</a></li>
                <li><a href="<?= site_url('/loker/tambah') ?>">Tambah Loker</a></li>
              </ul>
            </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Customer Service (Pika)
            </a>
          </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <?= $this->renderSection('konten') ?>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023 <div class="bullet"></div> Created By <a href="https://wa.me/c/6283840717665">WahibDev</a>
        </div>
        <div class="footer-right">
          Suported By <a href="https://wa.me/c/6283840717665">Pikaaa</a>
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('backend/modules/jquery.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/popper.js') ?>"></script>
  <script src="<?= base_url('backend/modules/tooltip.js') ?>"></script>
  <script src="<?= base_url('backend/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/moment.min.js') ?>"></script>
  <script src="<?= base_url('backend/js/stisla.js') ?>"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url('backend/modules/jquery.sparkline.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/chart.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/owlcarousel2/dist/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('backend/modules/summernote/summernote-bs4.js') ?>"></script>
  <script src="<?= base_url('backend/modules/chocolat/dist/js/jquery.chocolat.min.js') ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('backend/js/page/index.js') ?>"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('backend/js/scripts.js') ?>"></script>
  <script src="<?= base_url('backend/js/custom.js') ?>"></script>

</body>

</html>