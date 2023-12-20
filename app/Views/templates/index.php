<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/../../assets/vendors/css/vendor.bundle.base.css">
    

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>/../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- Sidebar -->
      <!-- partial:../../partials/_sidebar.html -->
      <?= $this->include('templates/sidebar'); ?>
       <!-- partial -->

       <div class="container-fluid">

        <!-- Navbar -->
        <!-- partial:../../partials/_navbar.html -->
        <?= $this->include('templates/navbar'); ?>
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">

            <!-- Page Content -->
            <?= $this->renderSection('page-content'); ?>
            <!-- End Page Content -->

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright SIZAKAT <?= date('Y') ?></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url(); ?>/../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/../../assets/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>/../../assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>/../../assets/js/misc.js"></script>
    <script src="<?= base_url(); ?>/../../assets/js/settings.js"></script>
    <script src="<?= base_url(); ?>/../../assets/js/todolist.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>