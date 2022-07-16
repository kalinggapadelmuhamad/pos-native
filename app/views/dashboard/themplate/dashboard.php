<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= baseUrl('assets/img/logo/logo.png') ?>" rel="icon">
    <title>POS - Dashboard</title>
    <link href="<?= baseUrl('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= baseUrl('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= baseUrl('assets/css/ruang-admin.css" rel="stylesheet') ?>">
    <link href="<?= baseUrl('assets/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= baseUrl('assets/vendor/package/dist/sweetalert2.min.css') ?>">
    <script src="<?= baseUrl('assets/vendor/package/dist/sweetalert2.all.min.js') ?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- <meta http-equiv="refresh" content="20" /> -->
</head>

<body id="page-top">
    <?php require 'app/utils/helpers.php'; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once 'app/views/dashboard/themplate/sideBar.php'; ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php require_once 'app/views/dashboard/themplate/topBar.php'; ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <?php require 'app/controller/controller.php'; ?>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <?php require_once 'app/views/dashboard/themplate/footer.php'; ?>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= baseUrl('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= baseUrl('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= baseUrl('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= baseUrl('assets/js/ruang-admin.min.js') ?>"></script>
    <script src="<?= baseUrl('assets/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= baseUrl('assets/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= baseUrl('assets/vendor/datatables/jquery.dataTables.min.js"') ?>"></script>
    <script src="<?= baseUrl('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= baseUrl('assets/js/showHide.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
</body>

</html>