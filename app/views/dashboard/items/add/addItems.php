<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addItems"><i class="fas fa-fw fa-plus-square"></i> Items</button>
<div class="modal fade" id="addItems" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Items</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="itemName">Item Name</label>
                            <input type="text" class="form-control" id="itemName" name="itemName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="categoriesItems">Categories</label>
                            <select name="categoriesItems" class="form-control" id="level">
                                <?php

                                while ($categoriesxd = $selCategoriesx->fetch_object()) { ?>

                                    <option value="<?= $categoriesxd->idCategories ?>"><?= $categoriesxd->categoriesName ?></option>

                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="capitalPrice">Capital Price</label>
                            <input type="number" class="form-control" id="capitalPrice" name="capitalPrice" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sellingPrice">Selling Price</label>
                            <input type="number" class="form-control" id="sellingPrice" name="sellingPrice" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Suppliers">Suppliers</label>
                            <select name="suppliers" class="form-control" id="level">
                                <?php

                                while ($supplierxd = $selSupplierx->fetch_object()) { ?>

                                    <option value="<?= $supplierxd->idSupplier ?>"><?= $supplierxd->supplierName ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="items-add">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>