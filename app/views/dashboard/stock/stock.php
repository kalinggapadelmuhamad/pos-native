<div class="col-xl-4 col-lg-5 ">
    <div class="card">
    </div>
</div>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Stock In</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Stock In</li>
        </ol>
    </div>

    <div class="row mb-3">
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>NO</th>
                                    <th>Items Code</th>
                                    <th>Items Name</th>
                                    <th>Caregories</th>
                                    <th>Supplier</th>
                                    <th>Stock Ready</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                while ($selStockxd = $selStockx->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <th><?= $selStockxd->itemsCode ?></th>
                                        <td><?= $selStockxd->itemsName ?></td>
                                        <td><?= $selStockxd->categoriesName ?></td>
                                        <td><?= $selStockxd->supplierName ?></td>
                                        <th class="h6">
                                            <?php

                                            //on
                                            if ($selFiturd->isTrue == '1') {

                                                $items =  $selStockxd->stockReady - $selFiturd->qty;

                                                if ($items < 0) {
                                                    $items = 0;
                                                }

                                                if ($selStockxd->stockReady <= 5) { ?>
                                                    <h4 class="badge badge-warning"><?= $items ?></h4>
                                                <?php } else { ?>
                                                    <h4 class="badge badge-success"><?= $items ?></h4>
                                                <?php }
                                                //off
                                            } else {
                                                if ($selStockxd->stockReady <= 5) { ?>
                                                    <h4 class="badge badge-warning"><?= $selStockxd->stockReady ?></h4>
                                                <?php } else { ?>
                                                    <h4 class="badge badge-success"><?= $selStockxd->stockReady ?></h4>
                                                <?php } ?>
                                            <?php   } ?>
                                        </th>
                                        <td class="text-center">
                                            <?php require "app/views/dashboard/stock/edit/editStock.php" ?>
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