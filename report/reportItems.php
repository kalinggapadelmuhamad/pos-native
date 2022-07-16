<style>
    @media print {

        body * {
            visibility: hidden;
        }

        .print-show,
        .print-show * {
            visibility: visible;
        }

        .print-show {
            display: block !important;
            position: absolute;
            width: 100%;
            top: 0;
            /* padding: 4px !important;
            margin: 4px !important; */
        }


        .print-show th {
            padding: 5px !important;
            margin: 0px !important;
        }

        .print-show td {
            padding: 4px !important;
            margin: 0px !important;
        }

        @page {
            size: A4 portrait !important;
            margin: 0;
        }
    }
</style>
<div class="d-none row print-show">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h1 class="h4 mt-5 text-gray-800">Point Of Sales | Items</h1>
                <p class="text-gray-800" st>JL.Ki Maja GG Cempaka No 43, Kedaton Bandar Lampung</p>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered text-kecil text-center" id="" width="" cellspacing="10">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            while ($selItemsrxd = $selItemsrx->fetch_object()) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $selItemsrxd->itemsCode ?></th>
                                    <td><?= $selItemsrxd->itemsName ?></td>
                                    <td><?= $selItemsrxd->categoriesName ?></td>
                                    <td><?= $selItemsrxd->supplierName ?></td>
                                    <td>Rp.<?= number_format("$selItemsrxd->capitalPrice", 0, ",", ".") ?></td>
                                    <td>Rp.<?= number_format("$selItemsrxd->sellingPrice", 0, ",", ".") ?></td>
                                    <td><?= $selItemsrxd->stockReady ?></td>
                                    <td><?= $selItemsrxd->inputDate ?></td>
                                    <td><?= $selItemsrxd->updateDate ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>