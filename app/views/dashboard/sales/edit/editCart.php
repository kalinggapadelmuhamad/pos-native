<button class="btn btn-sm btn-success mb-1" data-toggle="modal" data-target="#updateCart<?= $selCartd->idCart ?>"><i class="fas fa-fw fa-plus-square"></i></button>
<div class="modal fade" id="updateCart<?= $selCartd->idCart ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Qty</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="hidden" class="form-control" id="stockIn" name="idCart" value="<?= $selCartd->idCart ?>" required>
                            <input type="hidden" class="form-control" id="stockIn" name="idItems" value="<?= $selCartd->idItems ?>" required>
                            <input type="number" class="form-control" name="qty" value="0" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="sales-edit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>