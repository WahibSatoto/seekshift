<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>404 &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>backend/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>backend/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>backend/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>backend/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>backend/css/components.css">
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
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
              <?= session()->getFlashdata('null') ?>
            </div>
            <div class="page-search">
              <form>
                <div class="form-group floating-addon floating-addon-not-append">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-search"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-lg">
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="mt-3">
                <a href="<?= base_url('/landingpage') ?>">Back to Home</a>
              </div>
            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; WahibDev 2023
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url() ?>backend/modules/jquery.min.js"></script>
  <script src="<?= base_url() ?>backend/modules/popper.js"></script>
  <script src="<?= base_url() ?>backend/modules/tooltip.js"></script>
  <script src="<?= base_url() ?>backend/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>backend/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>backend/modules/moment.min.js"></script>
  <script src="<?= base_url() ?>backend/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?= base_url() ?>backend/js/scripts.js"></script>
  <script src="<?= base_url() ?>backend/js/custom.js"></script>
</body>

</html>