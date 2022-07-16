<button class="btn btn-sm btn-info mb-1" data-toggle="modal" data-target="#editItems<?= $selItemsxd->idItems ?>"><i class="fas fa-fw fa-pen-square"></i></button>
<div class="modal fade" id="editItems<?= $selItemsxd->idItems ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit Items</h6>
            </div>
            <form method="POST" action="">
                <?php

                require "app/models/items/selItemsbyId.php";
                require "app/models/categories/selCategories.php";
                require "app/models/supplier/selSupplier.php";

                ?>
                <div class="modal-body text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="itemName">Item Name</label>
                            <input type="hidden" name="idItems" value="<?= $selectItemsidd->idItems ?>">
                            <input type="hidden" class="form-control" id="itemName" name="itemNameold" value="<?= $selectItemsidd->itemsName ?>" required>
                            <input type="text" class="form-control" id="itemName" name="itemNamenew" value="<?= $selectItemsidd->itemsName ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="categoriesItems">Categories</label>
                            <select name="categoriesItems" class="form-control" id="level">
                                <?php

                                while ($selCategoriesxd = $selCategoriesx->fetch_object()) {
                                    if ($selCategoriesxd->categoriesName == $selectItemsidd->categoriesName) { ?>

                                        <option value="<?= $selCategoriesxd->idCategories ?>" selected><?= $selCategoriesxd->categoriesName ?></option>
                                    <?php } else { ?>

                                        <option value="<?= $selCategoriesxd->idCategories ?>"><?= $selCategoriesxd->categoriesName ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="capitalPrice">Capital Price</label>
                            <input type="number" class="form-control" id="capitalPrice" name="capitalPrice" value="<?= $selectItemsidd->capitalPrice ?>" required>
                        </div>
                        <div class=" form-group col-md-6">
                            <label for="sellingPrice">Selling Price</label>
                            <input type="number" class="form-control" id="sellingPrice" name="sellingPrice" value="<?= $selectItemsidd->sellingPrice ?>" required>
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="Suppliers">Suppliers</label>
                            <select name="suppliers" class="form-control" id="level">
                                <?php

                                while ($selSupplierxd = $selSupplierx->fetch_object()) {
                                    if ($selSupplierxd->supplierName == $selectItemsidd->supplierName) { ?>

                                        <option value="<?= $selSupplierxd->idSupplier ?>" selected><?= $selSupplierxd->supplierName ?></option>
                                    <?php } else { ?>

                                        <option value="<?= $selSupplierxd->idSupplier ?>"><?= $selSupplierxd->supplierName ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="items-edit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>