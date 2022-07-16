<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Sales Report</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sales Report</li>
        </ol>
    </div>
    <div class="row mb-3">
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <?php

                    if ($_SESSION['level'] == 'admin') { ?>
                        <form action="../report/salesReport/index.php" method="POST" class="d-inline">
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="inputFullname">From</label>
                                    <input type="date" name="from" class="form-control form-control-sm" required>
                                </div>
                                <div class=" form-group col-sm-2">
                                    <label for="inputEmail">To</label>
                                    <input type="date" name="to" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-danger d-inline" name="periode"><i class="fas fa-file-pdf fa-fw"></i></button>
                        </form>
                        <form action="../report/salesReport/index.php" method="POST" class="d-inline">
                            <button class="btn btn-sm btn-info" name="month"><i class="fas fa-file-pdf fa-fw"></i></button>
                            <button class="btn btn-sm btn-success" name="day"><i class="fas fa-file-pdf fa-fw"></i></button>
                        </form>

                    <?php } else { ?>
                        <form action="../report/salesReport/index.php" method="POST" class="d-inline">
                            <button class="btn btn-sm btn-info" name="month"><i class="fas fa-file-pdf fa-fw"></i></button>
                            <button class="btn btn-sm btn-success" name="day"><i class="fas fa-file-pdf fa-fw"></i></button>
                        </form>
                    <?php } ?>
                </div>
                <div class=" card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php

                            if ($_SESSION['level'] == 'admin') { ?>
                                <tfoot class="">
                                    <tr>
                                        <th colspan="3">
                                            <h6 class="m-0 font-weight-bold">Total Sales</h6>
                                        </th>
                                        <th colspan="" class="text-right">
                                            <h6 class="m-0 font-weight-bold" id="qtyTotal">
                                                <?php

                                                if ($selDetinx->num_rows > 0) {
                                                    echo $selDetinsumd->totalQty;
                                                }
                                                ?>
                                            </h6>
                                        </th>
                                        <th colspan="" class="text-right">
                                            <h6 class="m-0 font-weight-bold" id="subTotal">
                                                <?php

                                                if ($selDetinx->num_rows > 0) {
                                                    echo 'Rp.' . number_format("$selDetinsumd->subtotal", 0, ",", ".");
                                                }
                                                ?>
                                            </h6>
                                        </th>
                                        <th colspan="3" class="bg-success text-white">
                                            <h6 class="m-0 font-weight-bold">Profit</h6>
                                        </th>
                                        <th colspan="" class="bg-success text-white">
                                            <h6 class="m-0 font-weight-bold">
                                                <?php

                                                if ($selDetinx->num_rows > 0) {

                                                    while ($selInvpxd = $selInvpx->fetch_object()) {
                                                        $totalmodal = $selInvpxd->capitalPrice * $selInvpxd->qty;
                                                        $submodal   += $totalmodal;
                                                    }

                                                    $profit = $selDetinsumd->subtotal - $submodal;
                                                    echo 'Rp.' . number_format("$profit", 0, ",", ".");
                                                }
                                                ?>
                                            </h6>
                                        </th>
                                    </tr>
                                </tfoot>
                            <?php } ?>
                            <tbody>
                                <?php
                                //loop data
                                $no = 1;
                                while ($selDetinxd  = $selDetinx->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $selDetinxd->noInvoice ?></td>
                                        <td><?= $selDetinxd->fullName ?></td>
                                        <td><?= $selDetinxd->qtyTotal ?></td>
                                        <td>Rp.<?= number_format("$selDetinxd->grandTotal ", 0, ",", ".") ?></td>
                                        <td>Rp.<?= number_format("$selDetinxd->pay ", 0, ",", ".") ?></td>
                                        <td>Rp.<?= number_format("$selDetinxd->change ", 0, ",", ".") ?></td>
                                        <td><?= $selDetinxd->inputDate ?></td>
                                        <td class="text-center">
                                            <?php
                                            if ($_SESSION['level'] == 'admin') { ?>
                                                <?php require "app/views/dashboard/report/salesreportdetail.php" ?>
                                                <a href="salesreport/delete/salesreport/<?= $selDetinxd->idDetailinvoice ?>/<?= $selDetinxd->noInvoice ?>" class=" btn btn-sm btn-warning mb-1"><i class="fas fa-trash fa-fw"></i></a>
                                            <?php } else {
                                                require "app/views/dashboard/report/salesreportdetail.php";
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->



    <!-- Modal Logout -->

</div>