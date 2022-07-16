<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editSupplier<?= $selSupplierd->idSupplier ?>"><i class="fas fa-fw fa-pen-square"></i></button>
<div class="modal fade" id="editSupplier<?= $selSupplierd->idSupplier ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit Supplier</h6>
            </div>
            <form method="POST" action="">
                <?php require 'app/models/supplier/selSupplierId.php'; ?>
                <div class="modal-body text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="supplierName">Supplier Name</label>
                            <input type="hidden" class="form-control" id="supplierName" name="supplierNameOld" value="<?= $selSupplierIdd->supplierName ?>" required>
                            <input type="text" class="form-control" id="supplierName" name="supplierNameNew" value="<?= $selSupplierIdd->supplierName ?>" required>
                            <input type="hidden" class="form-control" id="supplierName" name="idSupplier" value="<?= $selSupplierIdd->idSupplier ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $selSupplierIdd->email ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="<?= $selSupplierIdd->phone ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= $selSupplierIdd->address ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" id="description" required><?= $selSupplierIdd->description ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="supplier-edit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>