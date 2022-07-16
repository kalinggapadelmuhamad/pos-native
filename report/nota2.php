<div class="row print-show">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h1 style="font-size:60px;font-weight:700;">Point Of Sales</h1>
                <h4 class="mb-0">Jl. ZA. Pagar Alam No.93, Gedong Meneng, Kota Bandar Lampung, Lampung 35141</h4>
                <h4 class="mb-2">Tel : 082175572310</h4>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table align-items-center text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Items Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tfoot class="bg-success text-white">
                            <tr>
                                <th colspan="5" class="text-right mt-5">
                                    <h6 class="m-0 font-weight-bold" id="subTotal">
                                        <?php

                                        if ($selCartx->num_rows > 0) {
                                            echo 'Rp.' . number_format("$selSumd->subTotal", 0, ",", ".");
                                        }
                                        ?>
                                    </h6>
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php

                            if ($selCartx->num_rows > 0) {
                                $no = 1;
                                while ($selCartd = $selCartx->fetch_object()) {
                                    $total = $selCartd->sellingPrice * $selCartd->qty; ?>
                                    <tr>
                                        <td><?= $selCartd->itemsName ?></td>
                                        <td><?= $selCartd->qty ?></td>
                                        <td class="font-weight-bold">Rp.<?= number_format("$selCartd->sellingPrice", 0, ",", ".") ?></td>
                                        <td class="font-weight-bold">Rp.<?= number_format("$total", 0, ",", ".") ?></td>
                                    <tr>
                                <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>