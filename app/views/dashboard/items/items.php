<div class="col-xl-4 col-lg-5 ">
    <div class="card">
    </div>
</div>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Items</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Items</li>
        </ol>
    </div>

    <div class="row mb-3">
        <?php

        //print supplier
        require_once "report/reportItems.php"
        ?>
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <?php

                    //filter level
                    if ($_SESSION['level'] == "admin") {

                        require_once "app/views/dashboard/items/add/addItems.php";

                        if ($selFiturd->isTrue == '0') {
                            require_once "app/views/dashboard/items/hidden/hiddenOff.php";
                        } else {
                            require_once "app/views/dashboard/items/hidden/hiddenOn.php";
                        }
                    ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Items';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php } else {
                        require_once "app/views/dashboard/items/add/addItems.php"; ?>
                        <a href="" class=" btn btn-sm btn-danger" onclick="document.title='Data Items';window.print()"><i class="fas fa-file-pdf fa-fw"></i></a>
                    <?php }
                    ?>
                </div>
                <div class="card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Items Code</th>
                                    <th>Items Name</th>
                                    <th>Categories</th>
                                    <th>Suppliers</th>
                                    <th>Capital Price</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th>Input Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                while ($selItemsxd = $selItemsx->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <th><?= $selItemsxd->itemsCode ?></th>
                                        <td><?= $selItemsxd->itemsName ?></td>
                                        <td><?= $selItemsxd->categoriesName ?></td>
                                        <td><?= $selItemsxd->supplierName ?></td>
                                        <td>Rp.<?= number_format("$selItemsxd->capitalPrice", 0, ",", ".") ?></td>
                                        <td>Rp.<?= number_format("$selItemsxd->sellingPrice", 0, ",", ".") ?></td>
                                        <th class="h6">
                                            <?php

                                            //on
                                            if ($selFiturd->isTrue == '1') {

                                                $items =  $selItemsxd->stockReady - $selFiturd->qty;

                                                if ($items < 0) {
                                                    $items = 0;
                                                }

                                                if ($selItemsxd->stockReady <= 5) { ?>
                                                    <h4 class="badge badge-warning"><?= $items ?></h4>
                                                <?php } else { ?>
                                                    <h4 class="badge badge-success"><?= $items ?></h4>
                                                <?php }
                                                //off
                                            } else {
                                                if ($selItemsxd->stockReady <= 5) { ?>
                                                    <h4 class="badge badge-warning"><?= $selItemsxd->stockReady ?></h4>
                                                <?php } else { ?>
                                                    <h4 class="badge badge-success"><?= $selItemsxd->stockReady ?></h4>
                                                <?php } ?>
                                            <?php   } ?>
                                        </th>
                                        <td><?= $selItemsxd->inputDate ?></td>
                                        <td><?= $selItemsxd->updateDate ?></td>
                                        <?php

                                        //filter level
                                        if ($_SESSION['level'] == "admin") { ?>
                                            <td class="text-center">
                                                <?php require "app/views/dashboard/items/edit/editItems.php" ?>
                                                <a href="items/delete/items/<?= $selItemsxd->idItems ?>" class=" btn btn-sm btn-warning"><i class="fas fa-trash fa-fw"></i></a>
                                            </td>
                                        <?php } else { ?>
                                            <td class="text-center">
                                                <?php require "app/views/dashboard/items/edit/editItems.php" ?>
                                            </td>
                                        <?php } ?>
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