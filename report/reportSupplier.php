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
            padding: 15px !important;
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
                <h1 class="h4 mt-5 text-gray-800">Point Of Sales | Supplier</h1>
                <p class="text-gray-800" st>JL.Ki Maja GG Cempaka No 43, Kedaton Bandar Lampung</p>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered text-kecil text-center" id="" width="" cellspacing="10">
                        <thead class="thead-light">
                            <tr>
                                <th>NO</th>
                                <th>Supplier Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            while ($selSupplierxd = $selSupplierrx->fetch_object()) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $selSupplierxd->supplierName ?></td>
                                    <td><?= $selSupplierxd->email ?></td>
                                    <td><?= $selSupplierxd->phone ?></td>
                                    <td><?= $selSupplierxd->address ?></td>
                                    <td><?= $selSupplierxd->description ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>