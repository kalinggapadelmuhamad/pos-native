<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateStock<?= $selStockxd->idItems ?>"><i class="fas fa-fw fa-plus-square"></i></button>
<div class="modal fade" id="updateStock<?= $selStockxd->idItems ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Stock In</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="hidden" class="form-control" id="stockIn" name="idItems" value="<?= $selStockxd->idItems ?>" required>
                            <input type="number" class="form-control" id="stockIn" name="stockIn" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="stock-in">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>