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
                <h1 class="h4 mt-5 text-gray-800">Point Of Sales | Categories</h1>
                <p class="text-gray-800" st>JL.Ki Maja GG Cempaka No 43, Kedaton Bandar Lampung</p>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered text-kecil text-center" id="" width="" cellspacing="10">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>NO</th>
                                <th>Categories Name</th>
                                <th>Description</th>
                                <th>Input Date</th>
                                <th>Update Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            while ($selCategoriesrxd = $selCategoriesrx->fetch_object()) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $selCategoriesrxd->categoriesName ?></td>
                                    <td><?= $selCategoriesrxd->description ?></td>
                                    <td><?= $selCategoriesrxd->inputDate ?></td>
                                    <td><?= $selCategoriesrxd->updateDate ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>