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
            left: 0;
            height: auto;
            /* padding: 4px !important;
            margin: 4px !important; */
        }

        .print-show thead th {

            padding: 0px;
            margin: 0;
        }

        @page {
            /* size: a6 portrait !important;
            margin: 0; */
        }
    }
</style>

<div class="d-none pt-5 px-4 print-show">
    <div class="row">
        <div class="col-12 mb-2 text-center">
            <h1 style="font-size:60px;font-weight:700;">Point Of Sales</h1>
            <h4 class="mb-0">Jl. ZA. Pagar Alam No.93, Gedong Meneng, Kota Bandar Lampung, Lampung 35141</h4>
            <h4 class="mb-2">Tel : 082175572310</h4>
        </div>
        <div class="col-7 mt-5">
            <h3 class="mb-0 text-black-800" style="text-transform: uppercase; font-weight:700;"><?= $noInvfinal ?></h3>
            <h3 class="mb-0" style="text-transform: uppercase;"><?= $_SESSION['fullName'] ?></h3>
        </div>
        <div class="col-12 bg-secondary border my-3"></div>
        <div class="col-12 mb-3">
            <div class="row">
                <div class="col-1 text-center">
                    <h3 style="font-weight:700;">Qty</h3>
                </div>
                <div class="col">
                    <h3 style="font-weight:700;">Items</h3>
                </div>
                <div class="col text-center">
                    <h3 style="font-weight:700;">Price</h3>
                </div>
                <div class="col text-right">
                    <h3 style="font-weight:700;">Total</h3>
                </div>
            </div>
        </div>
        <?php

        while ($selCartrxd = $selCartrx->fetch_object()) {

            //count total
            $total      = $selCartrxd->sellingPrice * $selCartrxd->qty;
        ?>
            <div class="col-12 mb-2">
                <div class="row">
                    <div class="col-1 text-center">
                        <h3><?= $selCartrxd->qty ?></h3>
                    </div>
                    <div class="col">
                        <h3><?= $selCartrxd->itemsName ?></h3>
                    </div>
                    <div class="col text-center">
                        <h3>Rp.<?= number_format("$selCartrxd->sellingPrice", 0, ",", ".") ?></h3>
                    </div>
                    <div class="col text-right">
                        <h3>Rp.<?= number_format("$total", 0, ",", ".") ?></h3>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="col-12 bg-secondary border my-3"></div>
        <div class="col-12">
            <h3>SubTotal
                <span class="float-right">
                    <?php

                    if ($selCartrx->num_rows > 0) {
                        echo 'Rp.' . number_format("$selSumd->subTotal", 0, ",", ".");
                    } ?>
                </span>
            </h3>
            <h3>Pay <div class="float-right">Rp.<span id="payReport"></span></div>
            </h3>
            <h3>Change <div class="float-right">Rp.<span id="changeReport"></span></div>
            </h3>
        </div>
        <div class="col-12 bg-secondary border my-3"></div>
        <div class="col-12 text-center">
            <h3>* Terima Kasih Telah Berbelanja Di Toko Kami *</h3>
            <h4>Date : <?= date('d M Y - H : i : s') ?></h4>
        </div>
    </div><!-- end row -->
</div>