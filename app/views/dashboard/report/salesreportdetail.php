<button class="btn btn-sm btn-info mb-1" data-toggle="modal" data-target="#detInvoice<?= $selDetinxd->noInvoice ?>"><i class="fas fa-fw fa-pen-square"></i></button>
<div class="modal fade" id="detInvoice<?= $selDetinxd->noInvoice ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Detail Invoice</h6>
            </div>
            <?php require "app/models/report/selReportdetail.php"; ?>
            <div class="card-body text-kecil">
                <p class="mb-0 text-black-800 text-left" style="text-transform: uppercase; font-weight:700;"><?= $selDetinxd->noInvoice ?></p>
                <p class="mb-0 text-left" style="text-transform: uppercase;"><?= $selDetinxd->fullName ?></p>
                <div class="col-12 bg-secondary border mt-1"></div>
                <div class="table-responsive">
                    <table class="table table2">
                        <thead class="thead">
                            <tr>
                                <th>Qty</th>
                                <th>Items</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($selInvd = $selInvx->fetch_object()) {

                                $total = $selInvd->sellingPrice * $selInvd->qty; ?>

                                <tr>
                                    <td><?= $selInvd->qty ?></td>
                                    <td><?= $selInvd->itemsName ?></td>
                                    <td>Rp.<?= number_format("$selInvd->sellingPrice", 0, ",", ".") ?></td>
                                    <td>Rp.<?= number_format("$total", 0, ",", ".") ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 bg-secondary border my-3"></div>
                <table class="table table2">
                    <thead class="thead">
                        <tr>
                            <th class="text-left">SubTotal</th>
                            <th class="text-right">Rp.<?= number_format("$selDetinxd->grandTotal", 0, ",", ".") ?></th>
                        </tr>
                        <tr>
                            <th class="text-left">Pay</th>
                            <th class="text-right">Rp.<?= number_format("$selDetinxd->pay ", 0, ",", ".") ?></th>
                        </tr>
                        <tr>
                            <th class="text-left">Change</th>
                            <th class="text-right">Rp.<?= number_format("$selDetinxd->change ", 0, ",", ".") ?></th>
                        </tr>
                    </thead>
                </table>
                <div class="col-12 bg-secondary border mb-2"></div>
                <p class="mb-0 text-center">Date <?= $selDetinxd->inputDate ?> WIB</p>
                <div class="modal-footer mt-3">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>