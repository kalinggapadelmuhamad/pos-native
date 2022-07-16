<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sales</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sales</li>
        </ol>
    </div>
    <?php

    //print supplier
    require_once "report/salesReport.php"
    ?>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-5">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="input-group">
                            <input name="itemsCode" type="text" class="form-control" id="itemsCode" required autofocus>
                            <div class="input-group-append bg-success">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-9 col-lg-7">
            <div class="card mb-4">
                <!-- <div class="card-header bg-second">
                    <h6 class="m-0 font-weight-bold text-white"><i class="fas fa-fw fa-shopping-cart"></i> Cart</h6>
                </div> -->
                <div class="card-body text-kecil">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>NO.</th>
                                    <th>Items Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot class="bg-success text-white">
                                <tr>
                                    <th colspan="6" class="text-right">
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
                                            <td><?= $no++ ?></td>
                                            <td><?= $selCartd->itemsName ?></td>
                                            <td class="font-weight-bold">Rp.<?= number_format("$selCartd->sellingPrice", 0, ",", ".") ?></td>
                                            <td><?= $selCartd->qty ?></td>
                                            <td class="font-weight-bold">Rp.<?= number_format("$total", 0, ",", ".") ?></td>
                                            <td class=" text-center">
                                                <?php require "app/views/dashboard/sales/edit/editCart.php" ?>
                                                <a href="sales/delete/sales/<?= $selCartd->idCart ?>/<?= $selCartd->idItems ?>/<?= $selCartd->qty ?>" class=" btn btn-sm btn-warning mb-1"><i class="fas fa-trash fa-fw"></i></a>
                                            </td>
                                        </tr> <?php }
                                        } else { ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 mt-3 px-0">
                        <form action="" method="POST">
                            <div class="form-row">
                                <?php

                                if ($selCartx->num_rows > 0) { ?>
                                    <input type="hidden" class="form-control form-control-sm" name="noInv" value="<?= $noInvfinal ?>" readonly>
                                    <input type="hidden" class="form-control form-control-sm" name="grandTotal" value="<?= $selSumd->subTotal ?>" readonly>
                                    <input type="hidden" class="form-control form-control-sm" name="qtyTotal" value="<?= $selSumd->totalQty ?>" readonly>
                                <?php }
                                ?>
                                <div class="form-group col-md-4">
                                    <label for="inputFullname">Pay</label>
                                    <input type="number" class="form-control form-control-sm" id="pay" name="pay" required onkeyup="kembali()">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail">Change</label>
                                    <input type="number" class="form-control form-control-sm" id="change" name="change" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm mt-2" onclick="document.title='<?= $noInvfinal ?>';window.print()">
                                <i class="fa fa-print mr-1"></i> Cetak
                            </button>
                            <button type="submit" class="btn  btn-sm btn-success mt-2" name="sales-checkout"><i class="fas fa-fw fa-shopping-bag"></i> Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function kembali() {

        var subTotal = <?= $selSumd->subTotal ?>;
        var bayar = document.getElementById('pay').value;
        var change = bayar - subTotal;

        document.getElementById("change").value = change;
        document.getElementById("payReport").textContent = bayar;
        document.getElementById("changeReport").textContent = change;

    }
</script>