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
    <div class="row print-show">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="h4 mt-5 text-gray-800">Point Of Sales | Day Report</h1>
                    <p class="text-gray-800" st>JL.Ki Maja GG Cempaka No 43, Kedaton Bandar Lampung</p>
                    <p class="mt-0 text-gray-800"><?= date('d-M-Y'); ?></p>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table table-bordered text-center text-kecil" id="" width="" cellspacing="10">
                            <thead class="thead-light">
                                <tr>
                                    <th>NO</th>
                                    <th>No Invoice</th>
                                    <th>Cashier</th>
                                    <th>Qty</th>
                                    <th>SubTotal</th>
                                    <th>Pay</th>
                                    <th>Changes</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tfoot class="">
                                <tr>
                                    <th colspan="3">
                                        <h6 class="m-0 font-weight-bold">Total Sales</h6>
                                    </th>
                                    <th colspan="" class="text-right">
                                        <h6 class="m-0 font-weight-bold" id="qtyTotal">
                                            <?php

                                            if ($selDayx->num_rows > 0) {
                                                echo $selDetinsumd->totalQty;
                                            }
                                            ?>
                                        </h6>
                                    </th>
                                    <th colspan="" class="text-right">
                                        <h6 class="m-0 font-weight-bold" id="subTotal">
                                            <?php

                                            if ($selDayx->num_rows > 0) {
                                                echo 'Rp.' . number_format("$selDetinsumd->subtotal", 0, ",", ".");
                                            }
                                            ?>
                                        </h6>
                                    </th>
                                    <th colspan="2" class="bg-success text-white">
                                        <h6 class="m-0 font-weight-bold">Profit</h6>
                                    </th>
                                    <th colspan="" class="bg-success text-white">
                                        <h6 class="m-0 font-weight-bold">
                                            <?php

                                            if ($selInvpx->num_rows > 0) {

                                                $profit = $selDetinsumd->subtotal - $submodal;
                                                echo 'Rp.' . number_format("$profit", 0, ",", ".");
                                            }
                                            ?>
                                        </h6>
                                    </th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                //loop data
                                $no = 1;
                                while ($selDayxd  = $selDayx->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $selDayxd->noInvoice ?></td>
                                        <td><?= $selDayxd->fullName ?></td>
                                        <td><?= $selDayxd->qtyTotal ?></td>
                                        <td>Rp.<?= number_format("$selDayxd->grandTotal ", 0, ",", ".") ?></td>
                                        <td>Rp.<?= number_format("$selDayxd->pay ", 0, ",", ".") ?></td>
                                        <td>Rp.<?= number_format("$selDayxd->change ", 0, ",", ".") ?></td>
                                        <td><?= $selDayxd->inputDate ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            window.print();
        })
        window.onafterprint = function() {
            history.go(-1);
        };
    </script>
</body>