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
                <h1 class="h4 mt-5 text-gray-800">Point Of Sales | Employes</h1>
                <p class="text-gray-800" st>JL.Ki Maja GG Cempaka No 43, Kedaton Bandar Lampung</p>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered text-center text-kecil" id="" width="" cellspacing="10">
                        <thead class="thead-light text-center">
                            <tr>
                                <th>NO</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            while ($selEmployesrxd = $selEmployesrx->fetch_object()) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $selEmployesrxd->fullName ?></td>
                                    <td><?= $selEmployesrxd->email ?></td>
                                    <td><?= $selEmployesrxd->phone ?></td>
                                    <td><?= $selEmployesrxd->address ?></td>
                                    <td><?= $selEmployesrxd->gender ?></td>
                                    <td><?= $selEmployesrxd->username ?></td>
                                    <td><?= $selEmployesrxd->passwordPlain ?></td>
                                    <td><?= $selEmployesrxd->level ?></td>

                                <?php
                            } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>